<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de longitudes:</h1>
    <p>Convierte de la unidad especificada a metros</p>
    <p>
        <?php
        if (isset($_POST["funidad"])){

          #  if ($_POST["funidad"] =="otro") {
           #     echo "Unidad no soportada";
           # }

            if ($_POST["funidad"]== "pulgada"){
                $v_pulgadas = $_POST["fcantidad"];
                $v_metros = $v_pulgadas * 0.0254;
                echo $v_pulgadas." pulgadas = " . $v_metros . " metros";
            } elseif ($_POST["funidad"]== "pies"){
                $v_pies = $_POST["fcantidad"];
                $v_metros = $v_pies * 0.3048;
                echo $v_pies." pies = " . $v_metros . " metros";
            } else {
                echo "unidad no soportada";
            }            
        }
        ?>
    </p>
    <p>Realiza una nueva conversion:</p>
    <form action="conversor2.php" method="post">
        <label for="cantidad_input">Cantidad:</label><br>
        <input type="text" name="fcantidad" id="cantidad_input"><br>
        <input type="radio" name="funidad" id="pulgada_input" value="pulgada">
        <label for="pulgada_input">Pulgada</label><br>
        <input type="radio" name="funidad" id="pies_input" value="pies">
        <label for="pies_input">Pies</label><br>
        <input type="radio" name="funidad" id="otro_input" value="otro">
        <label for="otro_input">Otro</label><br>

        <input type="submit" value="Convertir">
    </form>
</body>
</html>