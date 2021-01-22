<?php

namespace App\Models;

class Student extends Model
{
    public static $table = 'students';

    public function get()
    {
        return self::all();
    }

    public static function all()
    {
        self::connect();

        $sql = 'SELECT * FROM ' . self::$table;
        $stm = self::$dbh->prepare($sql);
        $stm->execute();

        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

}