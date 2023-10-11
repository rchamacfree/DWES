    <?php
        function edad_en_7_anos($edad){
            return $edad + 7;
        }
        function mensaje($age){
            if (edad_en_7_anos($age) > 65){
                return "En 7 años tendrás la edad de jubilación";
            } else {
                return "¡Disfruta de tu tiempo!";
            }

        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Jubilación</h1>
    <table>
        <tr>
            <th>Edad</th>
            <th>Info</th>
        </tr>
    <?php
        $lista = array(55,56,60,61,63);
        foreach ($lista as $valor){
            echo "<tr>";
            echo "<td>".$valor."</td>";
            echo "<td>". mensaje($valor) . "</td>";
            echo "</tr>";
        }
    ?>
    </table>

    
</body>
</html>