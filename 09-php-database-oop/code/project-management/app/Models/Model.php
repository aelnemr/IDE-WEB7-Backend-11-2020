<?php


namespace App\Models;


class Model
{
//    public $dbh;

    public static $dbh;


    public function __construct()
    {
       self::connect();
    }

    public static function connect()
    {
        global $dbh;
//        $this->dbh = $dbh;
        self::$dbh = $dbh;
    }
}