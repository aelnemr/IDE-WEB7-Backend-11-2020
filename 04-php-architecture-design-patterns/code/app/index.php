<?php
//$page = 'views/' . $_GET['p'] . '.php';
//$p = 'home';
//if (!empty($_GET['p'])) {
//    $p = $_GET['p'];
//}

$p = empty($_GET['p'])? 'home' : $_GET['p'];
$page = "views/$p.php";

if (file_exists($page)) {
    require_once $page;
} else {
    require_once 'views/404.php';
}

