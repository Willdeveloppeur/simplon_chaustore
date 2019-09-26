<?php
$conn = mysqli_connect ('localhost', 'willdev', 'Culcul1982!', 'simplon_chaustore');
$sql = 'INSERT INTO brand (name) VALUES ("'.$brand_add.'");'; 

$result = mysqli_query($conn, $sql);


?>