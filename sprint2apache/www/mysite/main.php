<?php 
$pass = "2253"; //Para acceso servidor
//$pass = ""; //Para trabajar en local
$db = mysqli_connect("localhost","root",$pass,"peliculas") or die("fail");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <h1>Listado de películas</h1>
    </header>
    <section>
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
//  	echo '<a href="details.php">prueba</a>';      
      
        echo '</td><td>';
        echo $row['director'];
        echo '</td><td>';
        echo '<img src="';
	echo $row['url_imagen'];
	echo '" alt = "imagen pelicula" height = "100">';
        echo '</td></tr>';
    }
    echo '</table>';
    mysqli_close($db);

    ?>
    </section>
</body>
</html>

