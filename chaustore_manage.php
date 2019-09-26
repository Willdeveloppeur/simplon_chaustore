<?php require_once 'conn.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Chaustore Management</title>
</head>

<body>
    <h1>Chaustore Brand Management</h1>

    <input type="button" value="Retour!" onclick="history.go(-1)">

    <form method="POST" action="">

        <input id="visu" name="visualiser" type="button" value="Visualiser">
        <input id="add" name="ajouter" type="button" value="Ajouter">
        <input id="mod" name="modifier" type="button" value="Modifier">
        <input id="delete" name="supprimer" type="button" value="Supprimer">
    </form>

    <div id='brand_open'><?php require_once "visu_brand.php" ?></div>
    <div id='add_open'></div>
    <div id='mod_open'></div>
    <div id='delete_open'></div>

    <script src="script.js"></script>
</body>

</html>