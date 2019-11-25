<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
    require('controllers/teams.php');
    listTeam();
}
if ($route === 'players') {
    require('controllers/players.php');
    listPlayer();
}
?>
