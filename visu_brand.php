
<?php
$sql = 'select * from brand ORDER BY id;'; 

$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
	
        for($i=0; $i<count($row); $i++){
            echo($row[$i]." ");
        }
        echo "<br>";
        
    }
?>