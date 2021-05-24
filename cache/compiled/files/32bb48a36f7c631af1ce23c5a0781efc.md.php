<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/lazyBear/user/pages/01.home/_header/header.md',
    'modified' => 1621887548,
    'data' => [
        'header' => [
            'title' => 'Header',
            'menu' => 'Top',
            'buttons' => [
                0 => [
                    'text' => 'Tell me more',
                    'url' => '#about',
                    'primary' => true
                ]
            ],
            'featured' => 'header.jpg'
        ],
        'frontmatter' => 'title: Header
menu: Top
buttons:
    -
        text: \'Tell me more\'
        url: \'#about\'
        primary: true
featured: header.jpg',
        'markdown' => '# Welcome to Lazy Bear Records
## Experimental Micro Label'
    ]
];
