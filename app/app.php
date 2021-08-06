<?php
namespace app;

 class App{

    const DB_SERVER= 'localhost';
    const DB_USER= 'root';
    const DB_PASSWORD= '';
    const DB_NAME='lapoo';
    


    private static $Database;
    public static function getDB(){
        if (self::$Database===null) {

            self::$Database = new Database(self::DB_SERVER, self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
        }
        return self::$Database;
    }
 }
