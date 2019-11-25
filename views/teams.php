<?php $title = "Auteur et ses livres"; ?>
<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="row justify-content-center">
            <?php foreach ($listTeam as $team) { ?>
                <div class="col-lg-3 col-md-4 mt-4 ">
                    <div class="card book h-100">
                        <div class="image">
                            <img src="<?php echo $team['logo']; ?>" class="card-img-top" alt="Logo " >
                            <p>Nom :<?php echo $team['name']; ?></p>
                            <p>Nom raccourci :<?php echo $team['short_name']; ?></p>
                            <p>Fondé le :<?php echo $team['fundation_date']; ?></p>
                            <p>Président :<?php echo $team['president']; ?></p>
                            <p>Adresse :<?php echo $team['adress']; ?></p>
                            <p>Site web :<?php echo $team['website']; ?></p>
                            <p>Lien :<?php echo $team['link']; ?></p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
