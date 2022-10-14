<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista 1</title>
</head>
<body>
    <table>

    <tr>
        <td>
            nombre del articulo
        </td>
        <?php
        
        foreach ($matrizProductos as $registro){

            echo "<tr><td>".$registro["NOMBREARTICULO"] ."</tr></td>";

        }
        ?>
    </tr>
    </table>
</body>
</html>