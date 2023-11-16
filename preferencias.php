<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
</head>
<body>
    
<?php

    $name=$_GET['name'];
    $surname=$_GET['surname'];
    $color=$_GET['color'];

    echo "Hola ".$name." ".$surname." Como estas?";
    echo "<br>";
    echo "Tu Color Favorito es:".$color;


?>





</body>
</html>