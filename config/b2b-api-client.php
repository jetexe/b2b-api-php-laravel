<?php

return [

    /*
     | --------------------------------------------------------------------------
     | URI сервиса B2B API
     | --------------------------------------------------------------------------
     |
     | Базовый URI, по которому находится API B2B сервиса.
     */
    'api_base_uri' => env('B2B_API_BASE_URI', 'https://some.host/b2b/api/v1'),

    /*
     | --------------------------------------------------------------------------
     | Домен пользователя
     | --------------------------------------------------------------------------
     |
     | Домен учётной записи, которая используется для взаимодействия с B2B
     | сервисом.
     */
    'domain'       => env('B2B_API_CLIENT_DOMAIN', '%set_your_domain_here%'),

    /*
     | --------------------------------------------------------------------------
     | Имя пользователя
     | --------------------------------------------------------------------------
     |
     | Имя пользователя учётной записи, которая используется для взаимодействия
     | с B2B сервисом.
     */
    'username'     => env('B2B_API_CLIENT_USERNAME', '%set_your_username_here%'),

    /*
     | --------------------------------------------------------------------------
     | Пароль пользователя
     | --------------------------------------------------------------------------
     |
     | Пароль пользователя учётной записи, которая используется для
     | взаимодействия с B2B сервисом. В открытом виде пароль не передаётся,
     | используется для генерации токена авторизации.
     */
    'password'     => env('B2B_API_CLIENT_PASSWORD', '%set_your_password_here%'),

    /*
     | --------------------------------------------------------------------------
     | Типы отчетов
     | --------------------------------------------------------------------------
     |
     | В данной секции описываются настройки типов отчётов, доступных для работы.
     | Обязательным является ключ `uids`.
     */
    'report_types' => [

        /*
         | ----------------------------------------------------------------------
         | UID-ы типов отчетов
         | ----------------------------------------------------------------------
         |
         | Описываются в формате:
         |
         | <code>
         |   '%внутренний_алиас_типа_отчёта%' => [
         |       'uid'         => '%uid_ипа_отчета%',
         |       'description' => '%его_описание%',
         |   ]
         | </code>
         */
        'uids'           => [
            'default'  => [
                'uid'         => '%some_report_type_uid_here%',
                'description' => 'Some report type description',
            ],
            'extended' => [
                'uid'         => '%one_more_report_type_uid%',
                'description' => 'One more report type description',
            ],
        ],

        /*
         | ----------------------------------------------------------------------
         | Тип отчета, используемый по умолчанию
         | ----------------------------------------------------------------------
         |
         | Должен присутствовать в ключах массиве 'uids' (алиас должен
         | существовать).
         */
        'use_as_default' => env('B2B_API_DEFAULT_REPORT_TYPE', 'default'),

    ],

    /*
     | --------------------------------------------------------------------------
     | Режим тестирования
     | --------------------------------------------------------------------------
     |
     | Состояние режима тестирования, при включении которого происходит лишь
     | эмуляция запросов, вместо их реального выполнения.
     |
     | Возможные значения: true|false
     */
    'is_test' => (bool) env('B2B_API_IS_TEST', false),

];
