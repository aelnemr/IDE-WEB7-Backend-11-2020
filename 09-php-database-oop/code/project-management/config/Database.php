<?php
try {
    // create object from PDO
    $dsn = "mysql:dbname=$_ENV[DB_NAME];host=$_ENV[DB_SERVER]";
    $dbh = new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
} catch (Exception $exception) {

    if ($_ENV['APP_ENV'] == 'dev') {
        echo $exception->getMessage();
        die;
    }

    echo "Site down";
    die;
}
