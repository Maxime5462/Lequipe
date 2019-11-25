<?php $title = "Teams"; ?>
<?php ob_start(); ?>

<div class="container">

    <?php foreach ($listTeam as $team) { ?>
        <div class="row">

                <img src="<?php echo $team['logo']; ?>" alt="Logo " >

                <p>Nom :<?php echo $team['name']; ?></p>
                <p>Nom raccourci :<?php echo $team['short_name']; ?></p>
                <p>Fondé le :<?php echo $team['fundation_date']; ?></p>
                <p>Président :<?php echo $team['president']; ?></p>
                <p>Adresse :<?php echo $team['adress']; ?></p>
                <a href="<?php echo $team['website']; ?>">Lien</a>
                <p>Site web :<?php echo $team['website']; ?></p>
                <p>Lien :<?php echo $team['link']; ?></p>

        </div>
    <?php } ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
