<?php 
$db = mysqli_connect("localhost","root","2253","peliculas") or die("fail");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conexión establecida.</h1>
    <p>Resultado de la query</p>
    <?php
    //Lanzamos una query
    $query = 'SELECT * FROM tpeliculas';
    $result = mysqli_query($db, $query) or die("query error");

    //Recorremos la query
	
    
    while ($row = mysqli_fetch_array($result)){
        echo $row['nombre'];
        echo '<br>';
        echo $row['director'];
        echo '<br>?';
    }

    ?>
</body>
</html>

