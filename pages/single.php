<?php 
 $row= $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']],'app\table\article', true);

?>
<h1><?= $row->titre; ?></h1>
<p><?=$row->contenu; ?></p>