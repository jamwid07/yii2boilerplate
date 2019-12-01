<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.getenv('DB_HOST').';dbname=' . getenv('DB_NAME'),
            'username' => getenv('DB_NAME'),
            'password' => getenv('DB_PASS'),
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => getenv('EMAIL_SMTP_HOST'),
                'username' => getenv('EMAIL_USER'),
                'password' => getenv('EMAIL_PASS'),
                'port' => getenv('EMAIL_PORT'),
            ],
        ],
    ],
];
