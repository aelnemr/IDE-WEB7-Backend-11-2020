<?php
// init
//register_shutdown_function("fatal_handler");


error_reporting(-1);
ini_set('display_errors', 1);

// autoload vendors and our file
require_once __DIR__ . "/vendor/autoload.php";

// config dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// database config
require_once __DIR__ . '/config/Database.php';
global $dbh;



//$studentUser = new \App\Models\Student();
//$studentUser2 = new \App\Models\Student();
//
//$studentUser->id = 5;
//$studentUser->name = 'Ahmed';
//$studentUser2->name = 'Ali';
//
//echo $studentUser->setPhone('5616198219562');

//echo $studentUser->getPhone();



//use App\Models\User;
//use App\Controllers\User as UserController;
//
//$user = new User();
//$user2 = new User();
//
//$useC = new UserController();
//
//echo $user2->login();

//$product = new \App\Models\Product();
//
//
//echo $product->joinCourse();

use App\Models\User;
use App\Models\Student;

//$user = new User();
//
//User::create([
//    'username' => 'NewUser',
//    'password' => '12345',
//    'full_name' => 'New User',
//]);
//
////print_r( User::all() );
//print_r($user->get());


print_r(Student::all());