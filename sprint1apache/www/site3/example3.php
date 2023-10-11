<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jubilación</h1>
    <?php
       
       if (isset($_GET["edad"])){
            $edad = $_GET["edad"];
            if (($edad + 10) > 65) {
                echo "En 10 años tendrás edad de jubilación";
            } else {
                echo "¡Disfruta de tu tiempo!";
            }
       } else {
        echo "No recibida la edad";
       }

    
    ?>
</body>
</html>