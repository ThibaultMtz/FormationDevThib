<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?=$message?>

<h1>insertion</h1>
<form method="post" action="">
    <label for="nom">Ajouter une ville</label>
    <input type="text" name="nom" id="nom" placeholder="test">

    <label for="roles">Choisir un rôle</label>
    <select name="roles" id="roles">
        <option value="">Choisir un rôle</option>

        <?php
        foreach ($roles as $role) {
            echo '<option value="'.$role['id'].'">'.$role['nom'].'</option>';
        }
        ?>
    </select>
    <button type="submit">enregistrer</button>
</form>








<?php
$prenoms =
?>
<h1>Insertion</h1>
<form method="POST" action="">
    <label for="user">Ajouter un utilisateur</label>
    <input type="text" name="user" id="user" placeholder="test">

    <label for="prenom">choisir un utilisateur</label>
    <select name="prenom" id="prenom">
        <option value="">Choisir un prénom</option>

        <?php foreach ($prenoms as $prenom){
            echo "<option value='".$prenom["id"]."'>".$prenom["prenom"]."</option>";
        }
        ?>
    </select>
</form>

</body>
</html>