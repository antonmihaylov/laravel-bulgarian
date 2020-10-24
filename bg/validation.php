<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Трябва да приемете :attribute',
    'active_url' => 'Полето :attribute не е валиден URL адрес.',
    'after' => 'Полето :attribute трябва да е дата след :date.',
    'after_or_equal' => 'Полето :attribute трябва да е дата след или точно :date.',
    'alpha' => 'Полето :attribute може да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute може да съдържа само букви, цифри, тире и долна черта.',
    'alpha_num' => 'Полето :attribute може да съдържа само букви и цифри',
    'array' => 'Полето :attribute трябва да е масив',
    'before' => 'Полето :attribute трябва да е дата преди :date.',
    'before_or_equal' => 'Полето :attribute трябва да е дата преди или точно :date.',
    'between' => [
        'numeric' => 'Полето :attribute трябва да е между :min и :max.',
        'file' => 'Полето :attribute трябва да е между :min и :max килобайта.',
        'string' => 'Полето :attribute трябва да съдържа между :min и :max знака.',
        'array' => 'Полето :attribute трябва да съдържа между :min и :max елемента.',
    ],
    'boolean' => 'Полето :attribute трябва да е true или false.',
    'confirmed' => 'Потвърждението за полето :attribute не съвпада.',
    'date' => 'Полето :attribute трябва да е валидна дата.',
    'date_equals' => 'Полето :attribute трябва да е съвпада с датата :date.',
    'date_format' => 'Полето :attribute трябва да е във формат :format.',
    'different' => 'Полетата :attribute и :other трябва да са различни.',
    'digits' => 'Полето :attribute трябва да е с :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да е с между :min и :max цифри.',
    'dimensions' => 'Изображението има невалидни размери.',
    'distinct' => 'Полето :attribute вече съществува.',
    'email' => 'Полето :attribute трябва да е валиден имейл адрес.',
    'ends_with' => 'Полето :attribute трябва да завършва на едно от следните: :values.',
    'exists' => 'Полето :attribute е невалидно.',
    'file' => 'Полето :attribute трябва да е файл.',
    'filled' => 'Полето :attribute трябва да е попълнено.',
    'gt' => [
        'numeric' => 'Полето :attribute трябва да е по-голямо от :value.',
        'file' => 'Полето :attribute трябва да е по-голямо от :value.',
        'string' => 'Полето :attribute трябва да съдържа повече знаци от :value.',
        'array' => 'Полето :attribute трябва да съдържа повече елементи от :value.',
    ],
    'gte' => [
        'numeric' => 'Полето :attribute трябва да е по-голямо от или точно колкото :value.',
        'file' => 'Полето :attribute трябва да е по-голямо от или точно колкото :value.',
        'string' => 'Полето :attribute трябва да съдържа повече знаци или точно колкото :value.',
        'array' => 'Полето :attribute трябва да съдържа повече елементи или точно колкото :value.',
    ],
    'image' => 'Полето :attribute трябва да е изображение.',
    'in' => 'Полето :attribute е невалидно.',
    'in_array' => 'Полето :attribute трябва да се съдържа в :other.',
    'integer' => 'Полето :attribute трябва да е цяло число.',
    'ip' => 'Полето :attribute трябва да е валиден IP адрес.',
    'ipv4' => 'Полето :attribute трябва да е валиден IPv4 адрес.',
    'ipv6' => 'Полето :attribute трябва да е валиден IPv6 адрес.',
    'json' => 'Полето :attribute трябва да е валиден JSON.',
    'lt' => [
        'numeric' => 'Полето :attribute трябва да е по-малко от :value.',
        'file' => 'Полето :attribute трябва да е по-малко от :value.',
        'string' => 'Полето :attribute трябва да съдържа по-малко знаци от :value.',
        'array' => 'Полето :attribute трябва да съдържа по-малко елементи от :value .',
    ],
    'lte' => [
        'numeric' => 'Полето :attribute трябва да е по-малко от или точно колкото :value.',
        'file' => 'Полето :attribute трябва да е по-малко от или точно колкото :value.',
        'string' => 'Полето :attribute трябва да съдържа по-малко знаци от или точно колкото :value.',
        'array' => 'Полето :attribute трябва да съдържа по-малко елементи от или точно колкото :value.',
    ],
    'max' => [
        'numeric' => 'Полето :attribute трябва да е по-малко от :max.',
        'file' => 'Полето :attribute трябва да е по-малко от :max килобайта.',
        'string' => 'Полето :attribute трябва да съдържа по-малко от :max знака.',
        'array' => 'Полето :attribute трябва да съдържа по-малко от :max елемента.',
    ],
    'mimes' => 'Полето :attribute трябва да е файл тип: :values.',
    'mimetypes' => 'Полето :attribute трябва да е файл тип: :values.',
    'min' => [
        'numeric' => 'Полето :attribute трябва да е по-голямо от :min.',
        'file' => 'Полето :attribute трябва да е по-голямо от :min килобайта.',
        'string' => 'Полето :attribute трябва да съдържа повече от :min знака.',
        'array' => 'Полето :attribute трябва да съдържа повече от :min елемента.',
    ],
    'multiple_of' => 'Полето :attribute трябва да е кратно на :value',
    'not_in' => 'Полето :attribute не е валидно.',
    'not_regex' => 'Полето :attribute не е във валиден формат.',
    'numeric' => 'Полето :attribute трябва да е число.',
    'password' => 'Паролата не съвпада.',
    'present' => 'Полето :attribute трябва да е налично.',
    'regex' => 'Полето :attribute не е във валиден формат.',
    'required' => 'Полето :attribute е задължително.',
    'required_if' => 'Полето :attribute е задължително, когато полето :other е :value.',
    'required_unless' => 'Полето :attribute е задължително, освен когато :other е :values.',
    'required_with' => 'Полето :attribute е задължително, когато полето :values е попълнено.',
    'required_with_all' => 'Полето :attribute е задължително, когато са попълнени полетата: :values.',
    'required_without' => 'Полето :attribute е задължително, когато полето: :values не е попълнено.',
    'required_without_all' => 'Полето :attribute е задължително, когато нито едно от полетата: :values не е попълнено.',
    'same' => 'Полето :attribute и :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Полето :attribute трябва да е :size.',
        'file' => 'Полето :attribute трябва да е :size килобайта.',
        'string' => 'Полето :attribute трябва да съдържа :size знака.',
        'array' => 'Полето :attribute трябва да съдържа :size елемента.',
    ],
    'starts_with' => 'Полето :attribute трябва да започва с едно от следните: :values.',
    'string' => 'Полето :attribute трябва да е a текст.',
    'timezone' => 'Полето :attribute трябва да е валидна часова зона.',
    'unique' => 'Полето :attribute вече е заето.',
    'uploaded' => 'Грешка при качване.',
    'url' => 'Полето :attribute не е във валиден формат.',
    'uuid' => 'Полето :attribute трябва да е валидно UUID.',

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

    'attributes' => [
        "name"                      => "Име",
        "username"                  => "Потребителско име",
        "email"                     => "Имейл",
        "first_name"                => "Име",
        "last_name"                 => "Фамилия",
        "password"                  => "Парола",
        "city"                      => "Град",
        "country"                   => "Държава",
        "address"                   => "Адрес",
        "phone"                     => "Телефон",
        "mobile"                    => "GSM",
        "age"                       => "Възраст",
        "sex"                       => "Пол",
        "gender"                    => "Пол",
        "day"                       => "Ден",
        "month"                     => "Месец",
        "year"                      => "Година",
        "hour"                      => "Час",
        "minute"                    => "Минута",
        "second"                    => "Секунда",
        "title"                     => "Заглавие",
        "content"                   => "Съдържание",
        "description"               => "Описание",
        "excerpt"                   => "Откъс",
        "date"                      => "Дата",
        "time"                      => "Време",
        "available"                 => "Достъпен",
        "size"                      => "Размер",
        "recaptcha_response_field"  => "Рекапча",
        "subject"                   => "Заглавие",
        "message"                   => "Съобщение",
    ],

];
