<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>TABUADA</h2>
<?php
    $menu = $_POST['menu'];

    for($i=0;$i<=10;$i++){
        $valor = $menu * $i;
        echo "$menu x ",$i," = $valor<br>";
    }
?>
</body>
</html>
