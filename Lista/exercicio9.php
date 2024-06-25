<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Saudação</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $horario = $_POST['horario'];

        list($hora, $minuto) = explode(':', $horario);
        $hora = intval($hora);

        if ($hora < 12) {
            $saudacao = "Bom dia";
        } elseif ($hora < 18) {
            $saudacao = "Boa tarde";
        } else {
            $saudacao = "Boa noite";
        }

        echo "<h1>$saudacao, $nome!</h1>";
    } else {
        echo "<p>Por favor, volte ao formulário e preencha os dados.</p>";
    }
    ?>
</body>
</html>
