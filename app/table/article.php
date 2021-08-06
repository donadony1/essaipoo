<?php
namespace app\table;
use app\App;

class article extends Table{

    public static function getLast(){
       return App::getDB()->query("SELECT articles.id, articles.titre,articles.contenu, categorie.titre as categorie 
       FROM articles 
        LEFT JOIN categorie
         ON categorie_id=categorie.id", __CLASS__ ); //'app\table\article' = __CLASS
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