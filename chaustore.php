<?php require_once 'conn.php' ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Simplon Chaustore</title>
</head>

<body>
    <h1> Gestionnaire Chaustore</h1>
    <form method="POST" action="chaustore_manage.php">
        <input type="submit" name="brand" value="Brand">
        <input type="submit" name="category" value="Category">
        <input type="submit" name="color" value="Color">
        <input type="submit" name="product" value="Product">
        <input type="submit" name="size" value="Size">
        <input type="submit" name="stock" value="Stock">
    </form>






    <script src="script.js"></script>
</body>

</html>