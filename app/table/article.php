<?php
namespace app\table;

class article{

    public function __get($key){
       $method= 'get'. ucfirst($key);
       $this->$key=$this->$method();
       return $this->$key; 
    }

    public function getUrl(){
        return 'index.php?p=article&id='.$this->id;
    }
    public function getExtrait(){
         $html= '<p>' .substr($this->contenu, 0, 100 ) .'...</p>';  
         $html.= '<p><a href="'. $this->getUrl() .'">voir la suite</a></p>';
        return $html;
    }

}  