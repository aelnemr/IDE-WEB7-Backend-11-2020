<?php
register_shutdown_function("fatal_handler");
error_reporting(-1);
ini_set('display_errors', 1);

// Report all PHP errors
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$user = new User();

echo phpinfo();