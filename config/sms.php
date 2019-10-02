<?php

return [
    'host' => env('SMS_HOST', 'gate.iqsms.ru'),
    'port' => env('SMS_PORT', 80),
    'username' => env('SMS_USERNAME'),
    'password' => env('SMS_PASSWORD'),
    'sender' => env('SMS_SENDER'),
    'test_phone' => env('SMS_TEST_PHONE'),
];
