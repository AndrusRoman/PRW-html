<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = htmlspecialchars($_POST['texto']);
        $comentarios = htmlspecialchars($_POST['comentarios']);
        $aceitar = isset($_POST['aceitar']) ? htmlspecialchars($_POST['aceitar']) : 'não';
        $sexo = isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) : 'não especificado';
        $pais = htmlspecialchars($_POST['pais']);
        
        echo "<p><strong>Texto:</strong> $texto</p>";
        echo "<p><strong>Comentários:</strong> $comentarios</p>";
        echo "<p><strong>Aceitar Termos:</strong> $aceitar</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>País:</strong> $pais</p>";
    } else {
        echo "<p>Nenhum dado foi enviado.</p>";
    }
    ?>
</body>
</html>