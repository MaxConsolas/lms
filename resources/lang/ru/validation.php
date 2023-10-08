<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    |
    |
    */

    'accepted' => ':attribute должно быть принято.',
    'active_url' => ':attribute не является действительным URL.',
    'after' => ':attribute должно быть датой после :date.',
    'after_or_equal' => ':attribute должно быть датой после или равной :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должно быть массивом.',
    'before' => ':attribute должно быть датой до :date.',
    'before_or_equal' => ':attribute должно быть датой до или равной :date.',
    'between' => [
        'numeric' => ':attribute должно быть между :min и :max.',
        'file' => ':attribute должно быть между :min и :max килобайт.',
        'string' => ':attribute должно быть между :min и :max символами.',
        'array' => ':attribute должно содержать от :min до :max элементов.',
    ],
    'boolean' => ':attribute должно иметь значение true или false.',
    'confirmed' => ':attribute и подтверждение не совпадают.',
    'date' => ':attribute не является действительной датой.',
    'date_equals' => ':attribute должно быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должно быть :digits цифрами.',
    'digits_between' => ':attribute должно быть между :min и :max цифрами.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute имеет повторяющееся значение.',
    'email' => ':attribute должно быть действительным адресом электронной почты.',
    'ends_with' => ':attribute должно заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранное значение :attribute недопустимо.',
    'file' => ':attribute должно быть файлом.',
    'filled' => ':attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше :value.',
        'file' => ':attribute должно быть больше :value килобайт.',
        'string' => ':attribute должно быть больше :value символов.',
        'array' => ':attribute должно содержать больше :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value килобайт.',
        'string' => ':attribute должно быть больше или равно :value символов.',
        'array' => ':attribute должно содержать :value элементов или больше.',
    ],
    'image' => ':attribute должно быть изображением.',
    'in' => 'Выбранное значение :attribute недопустимо.',
    'in_array' => ':attribute поле не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должно быть действительным IP-адресом.',
    'ipv4' => ':attribute должно быть действительным IPv4-адресом.',
    'ipv6' => ':attribute должно быть действительным IPv6-адресом.',
    'json' => ':attribute должно быть действительной JSON-строкой.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше :value.',
        'file' => ':attribute должно быть меньше :value килобайт.',
        'string' => ':attribute должно быть меньше :value символов.',
        'array' => ':attribute должно содержать меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file' => ':attribute должно быть меньше или равно :value килобайт.',
        'string' => ':attribute должно быть меньше или равно :value символов.',
        'array' => ':attribute не должно содержать более :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше :max.',
        'file' => ':attribute не может быть больше :max килобайт.',
        'string' => ':attribute не может быть больше :max символов.',
        'array' => ':attribute не может содержать более :max элементов.',
    ],
    'mimes' => ':attribute должно быть файлом типа: :values.',
    'mimetypes' => ':attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должно быть не менее :min.',
        'file' => ':attribute должно быть не менее :min килобайт.',
        'string' => ':attribute должно быть не менее :min символов.',
        'array' => ':attribute должно содержать не менее :min элементов.',
    ],
    'not_in' => 'Выбранное значение :attribute недопустимо.',
    'not_regex' => 'Формат поля :attribute недопустим.',
    'numeric' => ':attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => ':attribute поле должно быть заполнено.',
    'regex' => 'Формат поля :attribute недопустим.',
    'required' => ':attribute поле обязательно для заполнения.',
    'required_if' => ':attribute поле обязательно для заполнения, когда :other равно :value.',
    'required_unless' => ':attribute поле обязательно для заполнения, если :other не равно :values.',
    'required_with' => ':attribute поле обязательно для заполнения, когда присутствуют значения :values.',
    'required_with_all' => ':attribute поле обязательно для заполнения, когда присутствуют значения :values.',
    'required_without' => ':attribute поле обязательно для заполнения, когда отсутствуют значения :values.',
    'required_without_all' => ':attribute поле обязательно для заполнения, когда отсутствуют все значения :values.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должно быть равно :size.',
        'file' => ':attribute должно быть равно :size килобайт.',
        'string' => ':attribute должно быть равно :size символам.',
        'array' => ':attribute должно содержать :size элементов.',
    ],
    'starts_with' => ':attribute должно начинаться с одного из следующих значений: :values.',
    'string' => ':attribute должно быть строкой.',
    'timezone' => ':attribute должно быть действительным часовым поясом.',
    'unique' => ':attribute уже занято.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => 'Формат поля :attribute недопустим.',
    'uuid' => ':attribute должно быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'captcha' => 'Неверная капча...',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
