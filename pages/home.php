<div class="row">
    <div class="col-sm-8">

        <ul>

            <?php

use app\table\categorie;

foreach (app\table\article::getLast() as $row) : ?>
                <li>
                    <p><a href="<?= $row->Url ?>"><?= $row->titre; ?></a></p>
                    <p><?= $row->extrait ?> </p>
                    <!-- <?php var_dump($row)  ?> -->

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach(\app\table\Categorie::all() as $categorie): ?>
            <li><a href="<?=$categorie->url ?>"></a> <?= $categorie->titre ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>