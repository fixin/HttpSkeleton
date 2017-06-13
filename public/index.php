<?php
return (function () {
    if (PHP_SAPI === 'cli-server') {
        $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        if ($path !== __FILE__ && is_file($path)) {
            return false;
        }
    }

    $topPath = dirname(__DIR__);
    $config = include $topPath . '/config/loader.php';

    $application = include $topPath . '/vendor/fixin/fixin/boosts/web.php';
    $application->run();
})();
