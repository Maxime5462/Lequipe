<?php $title = "Team"; ?>
<?php ob_start(); ?>

<?php foreach ($players as $player) { ?>
    <p>Nom du joueur :<?php echo $player['name']; ?></p>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
