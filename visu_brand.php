<?php
$conn = mysqli_connect ('localhost', 'willdev', 'Culcul1982!', 'simplon_chaustore');
$sql = 'select * from brand;'; 

$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
	
        for($i=0; $i<count($row); $i++){
            echo($row[$i]." ");
        }
        echo "<br>";
        
    }
?>