<?php

// Add your host names
$hosts = ['yourHost'];

// Check host is allowed
$requestedHost = gethostname();

if (!in_array($requestedHost, $hosts)) {
    header("HTTP/1.1 404 Not Found");
    echo '<!DOCTYPE html><html><body><h1>Not Found</h1></body></html>';

    exit;
}

// Load config
$topPath = dirname(__DIR__);
$fixinPath = $topPath . '/vendor/fixin/fixin';
$fixinPath = dirname(__DIR__, 2) . '/Fixin';

return require "{$topPath}/config/{$requestedHost}.php";
