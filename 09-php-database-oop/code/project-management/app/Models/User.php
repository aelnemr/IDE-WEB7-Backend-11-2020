<?php
/**
 * # Attr's
 * + id
 * + name
 * + password
 *
 * # Actions
 * + login()
 * + register()
 * + order()
 *
 */

namespace App\Models;

class User extends Model
{

    public static $table = 'users';

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

    public static function create($data)
    {
        self::connect();

        $sql = '
                INSERT INTO `users`(`username`, `password`, `full_name`) 
                VALUES (:username, :password, :full_name)
                ';
        $stm = self::$dbh->prepare($sql);

        return $stm->execute($data);
    }
}