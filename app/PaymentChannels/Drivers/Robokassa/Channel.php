<?php

namespace App\PaymentChannels\Drivers\Robokassa;

use App\Models\Order;
use App\Models\PaymentChannel;
use App\PaymentChannels\IChannel;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class Channel implements IChannel
{
    protected $currency;
    protected $test_mode;
    protected $secret_key_1;
    protected $secret_key_2;

    /**
     * Channel constructor.
     * @param PaymentChannel $paymentChannel
     */
    public function __construct(PaymentChannel $paymentChannel)
    {
        $this->currency = currency();
        $this->test_mode = env('ROBOKASSA_TEST_MODE');
        $this->secret_key_1 = env('ROBOKASSA_SECRET_KEY_1');
        $this->secret_key_2 = env('ROBOKASSA_SECRET_KEY_2');
    }

    public function paymentRequest(Order $order)
    {
        $generalSettings = getGeneralSettings();
        $user = $order->user;

        $gateway = Omnipay::create('RoboKassa');

        $gateway->setSecretKey($this->secret_key_1);
        $gateway->setSecretKey2($this->secret_key_2);


        // Example card (actually customer) data
        $card = [
            'email' => $user->email ?? $generalSettings['site_email'],
            'billingFirstName' => $user->full_name,
            'billingLastName' => '',
            'billingPhone' => $user->mobile,
            'billingCompany' => $generalSettings['site_name'],
            'billingAddress1' => '',
            'billingCity' => '',
            'billingPostcode' => '',
            'billingCountry' => '',
        ];

        // Send purchase request
        try {

            $response = $gateway->purchase(
                [
                    'language' => 'ru',
                    'transactionId' => $order->id,
                    'paymentMethod' => 'hanzaee',
                    'purse' => 'ano.educall',
                    'amount' => $order->total_amount,
                    'currency' => $this->currency,
                    'description' => 'Оплата курса',
                    'testMode' => $this->test_mode,
                    'returnUrl' => $this->makeCallbackUrl($order, 'success'),
                    'cancelUrl' => $this->makeCallbackUrl($order, 'cancel'),
                    'notifyUrl' => $this->makeCallbackUrl($order, 'notify'),
                    'card' => $card,
                ]
            )->send();

            if ($response->isRedirect()) {
                // dd($response);
                return $response->redirect();
            }

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    private function makeCallbackUrl($order, $status)
    {
        return url("/payments/verify/Robokassa?status=$status&order_id=$order->id");
    }

    public function verify(Request $request)
    {
        $data = $request->all();
        $order_id = $data['Shp_TransactionId'];

        $user = auth()->user();

        $order = Order::where('id', $order_id)
            ->where('user_id', $user->id)
            ->first();

        if (!$order) {
            dd($request->all());
        }

        // Setup payment gateway
        $gateway = Omnipay::create('RoboKassa');
        $gateway->setSecretKey($this->secret_key_1);
        $gateway->setSecretKey2($this->secret_key_2);

        // Accept the notification
        // $response = $gateway->acceptNotification()->send();

        if (/* $response->isSuccessful() and  */!empty($order)) {
            // Mark the order as paid

            $order->update([
                'status' => Order::$paying
            ]);

            return $order;
        }

        if (!empty($order)) {
            $order->update([
                'status' => Order::$fail
            ]);
        }

        return $order;
    }
}
