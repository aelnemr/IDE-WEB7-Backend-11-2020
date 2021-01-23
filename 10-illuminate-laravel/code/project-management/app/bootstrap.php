<?php
// autoload vendors and our file
require_once __DIR__ . "/../vendor/autoload.php";

// config dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager;

$dm = new Manager();
$dbConfig = require_once __DIR__ . '/../config/database.php';
$dm->addConnection($dbConfig['connection']);

// Set connection global
$dm->setAsGlobal();

// load ORM
$dm->bootEloquent();