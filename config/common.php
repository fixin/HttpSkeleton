<?php
/**
 * Fixin Framework
 *
 * Copyright (c) Attila Jenei
 *
 * http://www.fixinphp.com
 */

return array_replace_recursive(require "$fixinPath/config/web.php", [
    'loader' => [
        'prefixes' => require "$topPath/vendor/composer/autoload_psr4.php"
    ],
    'resourceManager' => [
        'definitions' => [
            'templateFileResolver' => [
                'options' => [
                    'paths' => [
                        "$topPath/templates",
                    ]
                ]
            ]
        ]
    ]
]);
