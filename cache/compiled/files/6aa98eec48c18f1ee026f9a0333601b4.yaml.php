<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/lazyBear/user/plugins/flex-objects/blueprints/flex-objects.yaml',
    'modified' => 1621887153,
    'data' => [
        'type' => 'flex-objects',
        'form' => [
            'fields' => [
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_OBJECTS.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
