<?php

return [
    'settings' => [
        'atlas' => [
            'pdo' => [
                'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;host=127.0.0.1;port=8889;dbname=my_slim;charset=utf8;',
                'root',
                'root',
            ],
            'namespace' => 'DataSource',
            'directory' => dirname(__DIR__) . '/src/classes/DataSource',
        ]
    ],
];
