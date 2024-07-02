<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nomePasta = $_POST['namefile'];
    $qtd_imagens = 0;
    function EnviarArquivo($error, $size, $name, $tmp_name, $nomePasta, $numArquivo)
    {
        if ($error)
            die("Falha ao enviar o arquivo");
        if ($size > 2097152)
            die("Arquivo muito grande!! Max: 2MB");
        $pasta = "htdocs/$nomePasta/";
        $uploaddir = dirname(__FILE__) . "/$pasta";
        // Verifica se o diretório existe, senão cria
        if (!is_dir($uploaddir)) {
            if (!mkdir($uploaddir, 0755, true)) {
                die("Falha ao criar diretório de upload.");
            }
        }
        $nomeDoArquivo = $name;
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
        if ($extensao != "jpg" && $extensao != 'png')
            die("Tipo de extensão não aceita");
        $path = $pasta . $numArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($tmp_name, $path);
        if ($deu_certo) {
            return true;
        } else
            return false;
    }
    if (isset($_FILES['arquivos'])) {
        $arquivos = $_FILES['arquivos'];
        $tudo_certo = true;
        $numArquivo = 1;
        foreach ($arquivos['name'] as $index => $arq) {
            $deu_certo = EnviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index], $nomePasta, $numArquivo);
            if (!$deu_certo)
                $tudo_certo = false;
            $numArquivo++;
        }
        if ($tudo_certo) {
            echo "<p>Todos os arquivos foram enviados com sucesso!</p>";
            $qtd_imagens = count($arquivos['name']);
        } else
            echo "<p>Falha ao enviar um ou mais arquivos!</p>";
    }
    ?>
    <h1>Lista de Arquivos</h1>
    <table>
        <thead>
            <th>Imagen</th>
            <th>Arquivo</th>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= $qtd_imagens; $i++) {
                $caminhoAtual = "./htdocs/$nomePasta/$i.jpg";
            ?>
                <tr>
                    <td><img width="150" height="100" src="<?= $caminhoAtual ?>" alt=""></td>
                    <td><strong><?= $i ?></strong></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>