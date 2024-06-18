<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "<h2>Resultado</h2>";

       $Vlm = $_POST["velocidademedia"];
       $Dv = $_POST["distanciaviagem"];
       $Cm = $_POST["consumomedio"];

       $Th = $Dv / $Vlm;
       $Tc = $Dv / $Cm;

       echo "<h3>Total horas:</h3>",number_format($Th,2,".","");
       echo "<h3>Total combustivel:</h3>",number_format($Tc,2,".","");
    ?>
</body>
</html>