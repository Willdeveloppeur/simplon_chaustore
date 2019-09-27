<?php require_once 'conn.php' ?>
<?php
$brandname = $_POST['brand'];
if (isset($_POST["submit"]){
$req = "INSERT INTO brand (id, name) VALUES (NULL, $brandname);";
mysqli_query($conn,$req);}