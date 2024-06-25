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

       $Num1 = $_POST["numero1"];
       $Num2 = $_POST["numero2"];
       $Operacao = $_POST["operacao"];
       switch ($Operacao){
            case 1:
                $res = $Num1 + $Num2;
                break;
            case 2:
                $res = $Num1 - $Num2;
                break;
            case 3:
                $res = $Num1 * $Num2;
                break;
            case 4:
                $res = $Num1 / $Num2;
                break;    
       }
       echo number_format($res,2,".","");
    ?>
</body>
</html>