<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'default_serializer' => 'messenger.transport.symfony_serializer',
        'transports' => [
            'default' => 'amqp://localhost/%2f/messages',
            'customised' => [
                'dsn' => 'amqp://localhost/%2f/messages?exchange_name=exchange_name',
                'options' => ['queue' => ['name' => 'Queue']],
                'serializer' => 'messenger.transport.native_php_serializer',
            ],
        ],
    ],
]);
