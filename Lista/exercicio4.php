<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
</head>
<body>
    <h1>Resultado da Verificação</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = intval($_POST["ano"]);
        
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "<p>O ano $ano é bissexto.</p>";
        } else {
            echo "<p>O ano $ano não é bissexto.</p>";
        }
    }
    ?>
    <a href="index4.html">Verificar outro ano</a>
</body>
</html>