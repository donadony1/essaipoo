<?php
namespace app\table;
use app\App;

class Table{
    
    protected static $table;

    protected static function getTable(){
        if(static::$table==null){
            $class_name = explode('\\',get_called_class());
            static::$table= strtolower(end($class_name)) . 's';
            die(static::$table);

        }
        return static::$table;
    }

    public static function all(){
        return App::getDB()->query("SELECT * 
        FROM ".static::getTable() . "
         ", get_called_class());
    }



    public function __get($key){
       $method= 'get'. ucfirst($key);
       $this->$key=$this->$method();
       return $this->$key; 
    }


}  