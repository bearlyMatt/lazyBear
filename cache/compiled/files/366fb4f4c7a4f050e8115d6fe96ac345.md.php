<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/lazyBear/user/pages/01.home/modular.md',
    'modified' => 1621887263,
    'data' => [
        'header' => [
            'title' => 'Agency',
            'menu' => 'Home',
            'onpage_menu' => true,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_header',
                        1 => '_services',
                        2 => '_portfolio',
                        3 => '_about',
                        4 => '_team',
                        5 => '_clients'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Agency
menu: Home
onpage_menu: true
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _header
            - _services
            - _portfolio
            - _about
            - _team
            - _clients',
        'markdown' => ''
    ]
];
