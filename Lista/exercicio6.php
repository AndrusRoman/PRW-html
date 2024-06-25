<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Aprovação</title>
    <style>
        .reprovado {
            color: red;
        }
        .aprovado {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Resultado da Aprovação</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $frequencia = floatval($_POST["frequencia"]);
        
        $media = ($nota1 + $nota2) / 2;

        echo "<p>Nome do Aluno: $nome</p>";
        echo "<p>Nota 1: " . number_format($nota1, 2, ',', '.') . "</p>";
        echo "<p>Nota 2: " . number_format($nota2, 2, ',', '.') . "</p>";
        echo "<p>Frequência: " . number_format($frequencia, 2, ',', '.') . "%</p>";
        echo "<p>Média: " . number_format($media, 2, ',', '.') . "</p>";

        if ($media < 5) {
            echo "<p class='reprovado'>Reprovado por Nota</p>";
        } elseif ($frequencia < 75) {
            echo "<p class='reprovado'>Reprovado por Frequência</p>";
        } else {
            echo "<p class='aprovado'>Aprovado</p>";
        }
    }
    ?>
</body>
</html>