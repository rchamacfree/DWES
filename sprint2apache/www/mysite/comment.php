<?php
 
    if (!isset($_POST['pelicula_id'])) {
        echo '<p>Error al recibir datos</p>';
    }else{
        $pelicula_id = $_POST['pelicula_id'];
        $comentario = $_POST['new_comment'];
        $pass = "2253"; //Para acceso servidor
        //$pass = ""; //Para trabajar en local  
        $db = mysqli_connect('localhost','root',$pass,'peliculas') or die('Fail');
        $fecha = date('Y-m-d');
        //echo $fecha;
        
        $query = "INSERT INTO tcomentarios(comentario, pelicula_id, usuario_id, fecha) VALUES ('".$comentario."',".$pelicula_id.",NULL,'".$fecha."')";
        //echo '<p>'.$query.'</p>';
        mysqli_query($db, $query) or die('Error');
        echo "<p>Nuevo comentario ";
        echo mysqli_insert_id($db);
        echo " añadido</p>";
        echo "<a href='details.php?id=".$pelicula_id."'>Volver</a>";

        mysqli_close($db);

    }
?>
