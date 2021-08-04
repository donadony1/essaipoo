<?php

require '../app/autoloader.php';

app\Autoloader::register();


ob_start();
 
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
else{
    $p= 'home';
}

//initialisation des objets;
$db = new app\Database('lapoo');

if($p==='home'){
    require '../pages/home.php';
}elseif($p==='article'){
    require '../pages/single.php';
}
$conte= ob_get_clean();
require '../pages/templete/default.php';

?>