<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'news1.php';
        break;
    case '/author':
        require_once __DIR__.DIRECTORY_SEPARATOR.'authors.php';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR.'404.php';
}