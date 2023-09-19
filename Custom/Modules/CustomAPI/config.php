<?php

return [
    'name' => 'CustomAPI',
    'version' => '1.0',
    'author' => 'Urvashi Dhokiya',
    'routes' => [
        'api' => [
            'api/users' => 'CustomAPI\Controllers\API\UsersController@index',
            'api/transactions' => 'CustomAPI\Controllers\API\TransactionsController@index',
            'api/invoice' => 'CustomAPI\Controllers\API\InvoiceController@index',
        ],
    ],
];
