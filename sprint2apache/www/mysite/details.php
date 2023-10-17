<?php
    $db = mysqli_connect('localhost','root','2253','tpeliculas') or die('Fail');
    
    if (!isset($_GET['id'])) {
        die ('No se ha recibido el id');
    }

    $pelicula = $_GET['id'];
    $query = 'SELECT * FROM tpeliculas WHERE id = ' . $pelicula;
    $result = mysqli_query($db,$query) or die('query error');
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<h1>' . $row['nombre'] . '<h1>';
        echo '<h2>' . $row['year'] . '<h1>';
        echo '<h3>Comentarios:</h3>';
        echo '<ul>';

        $query2 = 'SELECT * FROM tcomentarios WHERE pelicula_id =' . $pelicula;
        $result2 = mysql_query($db,$query2) or die('Query Error');
        while ($row2 = mysqli_fetch_array($result2)){
            echo '<li>' . $row2["comentario"] . '</li>';

        }
        mysqli_close($db);
    ?>
    </ul>
    

</body>
</html>