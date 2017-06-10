<?php

// Check host is allowed
$hosts = [
    'localhost' => ['127.0.0.1'],
    // Add host names and their IP addresses
];
$requestedHost = $_SERVER['SERVER_NAME'];
$requestedHost = 'localhost';

if (!in_array($_SERVER['SERVER_ADDR'], $hosts[$requestedHost] ?? [])) {
    header("HTTP/1.1 404 Not Found");
    echo '<!DOCTYPE html><html><body><h1>Not Found</h1></body></html>';

    exit;
}

// Load config
$topPath = dirname(__DIR__);
$fixinPath = $topPath . '/vendor/fixin/fixin';

return require "{$topPath}/config/{$requestedHost}.php";
