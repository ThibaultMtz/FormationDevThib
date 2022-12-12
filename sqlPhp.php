<?php

require_once('../../../../Alkas-2022-2023/cours/php/exo/fonctions/outils.php');
function connexion()
{
    $connexion = new PDO('mysql:dbname=forum_v2;host=localhost', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $connexion;
}

function listUser($connexion, int $limit = 1) :array
{
    return listAll($connexion, 'select * from forum_v2.user limit '.$limit);
}

function listAll($connexion, string $requete) : array
{
    $prepare = $connexion->prepare($requete);
    $prepare->execute();
    $result = $prepare->fetchAll();
    return $result;
}



/*foreach($lignes as $ligne) {
    $id = $ligne['id'];
    $prenom = $ligne['prenom'];
    $nom = $ligne['nom'];
    $login = $ligne['login'];
    $inscription = $ligne['date_inscription'];
}*/




