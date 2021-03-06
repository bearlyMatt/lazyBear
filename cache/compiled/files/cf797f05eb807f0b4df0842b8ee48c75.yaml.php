<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/lazyBear/user/accounts/admin.yaml',
    'modified' => 1621887337,
    'data' => [
        'state' => 'enabled',
        'email' => 'matthewharazim@vivaldi.net',
        'fullname' => 'Matthew Harazim',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'HKYIGTPLXKT24U46POOKSSNCTK2AUSOI',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$/R6r1kwcjXw83Ib3XbhRgesu8Zb/tYSoIU2U8fyJryOIz8OayF5Ry',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ]
        ]
    ]
];
