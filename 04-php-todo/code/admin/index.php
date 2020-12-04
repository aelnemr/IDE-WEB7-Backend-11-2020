<?php
//$page = 'views/' . $_GET['p'] . '.php';
//$p = 'home';
//if (!empty($_GET['p'])) {
//    $p = $_GET['p'];
//}

$p = empty($_GET['p']) ? 'home' : $_GET['p'];

// route for post requests
if (file_exists("controllers/$p.php") && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "controllers/$p.php";
} elseif (file_exists("views/$p.php") && $_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once 'templates/header.php';
    require_once "views/$p.php";
    include_once 'templates/footer.php';
} else {
    include_once 'templates/header.php';
    require_once 'views/404.php';
    include_once 'templates/footer.php';
}


