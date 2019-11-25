<?php $title = "Teams"; ?>
<?php ob_start(); ?>



<?php foreach ($listTeam as $team) { ?>
    <div class="col-3">


        <div class="card mt-3 ml-3 " style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $team['logo']; ?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-title ">Nom :<?php echo $team['name']; ?></p>
                <p class="card-text ">
                    <p>Nom raccourci :<?php echo $team['short_name']; ?></p>
                    <p>Fondé le :<?php echo $team['fundation_date']; ?></p>
                    <p>Président :<?php echo $team['president']; ?></p>
                    <p>Adresse :<?php echo $team['adress']; ?></p>
                    <p>Site web :<?php echo $team['website']; ?></p>
                    <p>Lien :<?php echo $team['link']; ?></p></p>
                    <a href="<?php echo $team['website']; ?>" class="btn btn-primary">Lien</a>
                </div>
            </div>
        </div>
    <?php } ?>



    <?php $content = ob_get_clean(); ?>
    <?php require('public/index.php'); ?>
