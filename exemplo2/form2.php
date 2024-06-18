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
       echo "<h2>Cadastrado</h2>";

       $username = $_GET["Username"];
       $senha = $_GET["Senha"];
       $nome = $_GET["Nome"];
       $email = $_GET["Email"];
       $cidade = $_GET["Cidade"];
       $estado = $_GET["Estado"];
   
       echo "<h3>Username:</h3>";
       echo $username;
       echo "<h3>Senha:</h3>";
       echo $senha;
       echo "<h3>Nome:</h3>";
       echo $nome;
       echo "<h3>E-mail:</h3>";
       echo $email;
       echo "<h3>Cidade:</h3>";
       echo $cidade;
       echo "<h3>Estado:</h3>";
       echo $estado;

       $erro=0;
       if(strlen($username)<5){
        echo "O username deve possuir no minimo 5 caracteres.<br>";
        $erro=1;
       }
       if(strlen($senha)<5){
        echo "A senha deve possuir no minimo 5 caracteres.<br>";
        $erro=1;
       }
       if(empty($cidade)){
        echo "Favor digitar sua cidade.<br>";
        $erro=1;
       }
       if(strlen($estado)!=2){
        echo "Favor digitar seu estado corretamente.<br>";
        $erro=1;
       }if($erro==0){
        echo "Todos os dados foram digitados corretamente!.";
       }
    ?>
</body>
</html>