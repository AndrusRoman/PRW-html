<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital do Estado</title>
</head>
<body>
    <h2>Capital do Estado</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estado = htmlspecialchars($_POST['estado']);

        // Array associativo com estados e suas capitais
        $capitais = array(
            "AC" => "Rio Branco",
            "AL" => "Maceió",
            "AP" => "Macapá",
            "AM" => "Manaus",
            "BA" => "Salvador",
            "CE" => "Fortaleza",
            "DF" => "Brasília",
            "ES" => "Vitória",
            "GO" => "Goiânia",
            "MA" => "São Luís",
            "MT" => "Cuiabá",
            "MS" => "Campo Grande",
            "MG" => "Belo Horizonte",
            "PA" => "Belém",
            "PB" => "João Pessoa",
            "PR" => "Curitiba",
            "PE" => "Recife",
            "PI" => "Teresina",
            "RJ" => "Rio de Janeiro",
            "RN" => "Natal",
            "RS" => "Porto Alegre",
            "RO" => "Porto Velho",
            "RR" => "Boa Vista",
            "SC" => "Florianópolis",
            "SP" => "São Paulo",
            "SE" => "Aracaju",
            "TO" => "Palmas"
        );

        if (array_key_exists($estado, $capitais)) {
            $capital = $capitais[$estado];
            echo "<p>A capital de " . htmlspecialchars($_POST['estado']) . " é <strong>$capital</strong>.</p>";
        } else {
            echo "<p>Estado não encontrado.</p>";
        }
    } else {
        echo "<p>Nenhum dado foi enviado.</p>";
    }
    ?>
</body>
</html>