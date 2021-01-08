<?php
//$page = 'views/' . $_GET['p'] . '.php';
//$p = 'home';
//if (!empty($_GET['p'])) {
//    $p = $_GET['p'];
//}
include 'libs/functions.php';
$p = empty($_GET['p'])? 'home' : $_GET['p'];
$page = "views/$p.php";

include_once 'templates/header.php';
if (file_exists($page)) {
    require_once $page;
} else {
    require_once 'views/404.php';
}
include_once 'templates/footer.php';
