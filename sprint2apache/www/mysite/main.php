<?php 
$db = mysqli_connect("localhost","root","2253","peliculas") or die("fail");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	table {
		font-family: arial , sans-serif;
		border-collapse: collapse;
		width: 100%;
		}
	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}
    </style>
</head>
<body>
    <h1>Conexión establecida.</h1>
    <p>Resultado de la query</p>
    <?php
    //Lanzamos una query
    $query = 'SELECT * FROM tpeliculas';
    $result = mysqli_query($db, $query) or die("query error");

    //Recorremos la query
	echo '<table>';
    echo '<tr><th>Titulo</th><th>Director</th><th>imagen</th></tr>';
    
    while ($row = mysqli_fetch_array($result)){
        echo '<tr><td>';
        echo '<a href="details.php?id='. $row["id"] .'">' . $row["nombre"] .'</a>';
        
      
        echo '</td><td>';
        echo $row['director'];
        echo '</td><td>';
        echo '<img src="';
	echo $row['url_imagen'];
	echo '" alt = "imagen pelicula" width = "100" height = "200">';
        echo '</td></tr>';
    }
    echo '</table>';
    mysqli_close($db);

    ?>
</body>
</html>

