<?php
    $pass = "2253"; //Para acceso servidor
   // $pass = ""; //Para trabajar en local
    $db = mysqli_connect('localhost','root',$pass,'peliculas') or die('Fail');
    
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo '<h1>' . $row['nombre'] . '<h1>';?></h1>
    </header>
    <section>
        <div id="cover"><img src="<?php echo $row['url_imagen']?>" alt="cover" width="200"></div>
    
    
        <div id="datos">
            <?php
                
                echo '<h2> Año: </h2>';
                echo '<h4>' . $row['year'] . '</h4>';
                echo '<h2> Director: </h2>';
                echo '<h4>' . $row['director'] . '</h4>';
                echo '<div id="comentarios">';
                echo '<h3>Comentarios:</h3>';
                echo '<ul>';
                $query2 = 'SELECT * FROM tcomentarios WHERE pelicula_id = '.$pelicula;
                $result2 = mysqli_query($db,$query2) or die('Query Error');
                while ($row2 = mysqli_fetch_array($result2)){
                    echo '<li>' . $row2["comentario"] .'<span class="fecha">  ('. $row2["fecha"].')</span></li>';
                }
                echo '</ul>';
                echo '</div>';
            ?>
        </div>
        <div id="comentarioForm">
            <h2>Deja un nuevo comentario:</h2>
            <form action="comment.php" method="post">
                <textarea name="new_comment" id="new_comment" cols="40" rows="4"></textarea><br>
                <input type="hidden" name="pelicula_id" value="<?php echo $pelicula; ?>">
                <input type="submit" value="Comentar">
            </form>
        </div>
    </section>
    <?php mysqli_close($db); ?>

</body>
</html>
