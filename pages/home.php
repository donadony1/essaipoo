
<ul>

    <?php foreach($db->query('SELECT * FROM articles', 'app\table\article') as $row): ?>
        <li>
           <p><a href="<?= $row->Url ?>"><?=$row->titre; ?></a></p> 
           <p><?= $row->extrait ?> </p>

    </li> 
    <?php endforeach;?>
</ul>

<a href="index.php?p=article"> aller au single</a>
