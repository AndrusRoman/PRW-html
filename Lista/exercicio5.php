<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Área do Terreno</title>
</head>
<body>
    <h1>Resultado da Área do Terreno</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largura = floatval($_POST["largura"]);
        $comprimento = floatval($_POST["comprimento"]);
        
        $area = $largura * $comprimento;
        
        echo "<p>A área do terreno é " . number_format($area, 2, ',', '.') . " metros quadrados.</p>";
    }
    ?>
</body>
</html>