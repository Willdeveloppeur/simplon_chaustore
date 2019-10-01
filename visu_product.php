

<?php
    //requête SQL:
    $sql = "SELECT id, name,category_id,brand_id,price,gender FROM product ORDER BY id" ;
    
    //exécution de la requête:
    $request = mysqli_query( $conn, $sql ) ;

     echo "<table>";
 
    //affichage des données:
    while( $result = mysqli_fetch_array( $request ) )
    {
       echo"
       <tr>
           <th>{$result['id']}</th>
           <th>{$result['name']}</th>
           <th>{$result['category_id']}</th>
           <th>{$result['brand_id']}</th>
           <th>{$result['price']}</th>
           <th>{$result['gender']}</th>
       </tr>";
    }
    
  ?>

