<?php
return (function () {
    include dirname(__DIR__, 2) . '/Fixin/tools/performance/loadedClasses/begin.php';

    if (PHP_SAPI === 'cli-server') {
        $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        if ($path !== __FILE__ && is_file($path)) {
            return false;
        }
    }

    $config = include dirname(__DIR__) . '/config/loader.php';

    $application = include "{$fixinPath}/boosts/web.php";
    $application->run();

    include dirname(__DIR__, 2) . '/Fixin/tools/performance/loadedClasses/end.php';
})();
