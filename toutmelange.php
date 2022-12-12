<?php

require_once('../../../../Alkas-2022-2023/cours/php/exo/fonctions/outils.php');
require_once('etudiants/Thibault/PHP/sqlPhp.php');

$con = connexion();

$users =listUser($con,2);

require_once('exoMessengerv2.php');