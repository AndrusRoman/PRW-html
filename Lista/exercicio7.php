<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos Dias de Vida</title>
</head>
<body>
    <h1>Resultado dos Dias de Vida</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = intval($_POST["idade"]);
        
        $dias_de_vida = $idade * 365;

        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade anos</p>";
        echo "<p>$nome, você já viveu aproximadamente $dias_de_vida dias.</p>";
    }
    ?>
</body>
</html>