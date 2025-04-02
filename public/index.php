<?php

require_once(dirname(__FILE__, 2)) . '/src/config/config.php';

$uri = urldecode(
  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$uri = str_ireplace("/innout/public", "", "$uri");

if ($uri === '/' || $uri === ''  || $uri === '/index.php') {
  $uri = '/login.php';
}

require_once(CONTROLLER_PATH . "{$uri}");