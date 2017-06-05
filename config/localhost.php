<?php
return array_replace_recursive(require 'common.php', [
    // Custom config for 'localhost'
    'resourceManager' => [
        'definitions' => [
            'config' => [
                'options' => [
                    'values' => [
                        'development' => true
                    ]
                ]
            ],
        ]
    ]
]);
