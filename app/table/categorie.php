<?php

namespace app\table;

use app\App;

class Categorie extends Table
{

    public function getUrl(){
        return 'index.php?p=categorie&id='.$this->id;
    }
}
