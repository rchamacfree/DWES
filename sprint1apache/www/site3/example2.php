<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de bienvenidas</h1>
    <?php 
        function darBienvenida($nombre) {
            echo "¡ Bienvenido/a " . $nombre . "!";
        }

        darBienvenida("Homer");
    ?>
</body>
</html>