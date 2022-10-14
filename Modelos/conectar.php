<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conectar a base de datos</title>
</head>
<body>
    <?php
    
    class Conectar{

public static function conexion()
{
    try {
        $conexion =new PDO("mysql:host= '127.0.0.1'; dbname= bdproductos", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
    }
    catch (Exception $e) {
        die (" Error " . $e-> getMessage());
        echo "Linea de Error".$e->getLine();
    }
}

    }
    
    ?>
</body>
</html>