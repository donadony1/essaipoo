<?php

namespace app;
use \PDO;

class Database{

   private $servername;
   private $username;
    private $password;
    private $bdname;
    private $conn;

    public function __construct($bdname,$server = "localhost",$user =  "localhost",$pass = "")
    {
        $this->servername=$server;
        $this->username=$user;
        $this->password=$pass;
        $this->bdname=$bdname;
    }

    private function getPDO(){
        if($this->conn===null){
            $conn = new PDO('mysql:host=localhost;dbname=lapoo','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn=$conn;
        }
        return $this->conn;
    }

    public function query($tatement, $class_name){
        $res=$this->getPDO()->query($tatement);
        $data=$res->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }
    public function prepare($statements, $attributes, $class_name, $one=false){
        $req=$this->getPDO()->prepare($statements);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){  
            $data=$req->fetch();
        }else{
            $data=$req->fetchall();
        }

        return $data;
    }
}