<?php require_once 'conn.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Chaustore BRAND Management</title>
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

    <div id='visu_brand'><?php require_once "visu_brand.php" ?></div>

    <div id='add_brand'>
    
        <?php
        if (!empty($_POST["submit"]) && !empty($_POST["brand"])) {
            $brandname = $_POST['brand'];
            $req = "INSERT INTO brand (name) VALUES ('$brandname');";
            mysqli_query($conn, $req);
        }?>
        <form id="addForm" method="POST" action="brand_manage.php">
            <label for="brandadd">Ajouter une marque </label>
            <input type="text" id="brandadd" name="brand" value='' />
            <input class="btn" type="submit" name="submit" value="Valider" />
            </p>
        </form>
    </div>




    <div id='mod_brand'>
    </div>




    <div id='delete_brand'>
        
    <?php
        if (!empty($_POST["submit"]) && !empty($_POST["delete"])) {
            $branddelete = $_POST['delete'];
            $req = "DELETE FROM brand where id=('$branddelete');";
            mysqli_query($conn, $req);
        }?>
        <form id="deleteForm" method="POST" action="brand_manage.php">
            <label for="branddelete">rentrer l'id du produit à supprimer</label>
            <input type="text" id="branddelete" name="delete" value='' />
            <input class="btn" type="submit" name="submit" value="Valider" />
            </p>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>