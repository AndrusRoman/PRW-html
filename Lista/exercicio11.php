<?php
    $pron = $_POST['pron'];
    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $periodo = $_POST['periodo'];
    $modulo = $_POST['modulo'];

    if(empty($pron)){ echo "Seu prontuário está em branco<br>";}
    if(empty($name)){ echo "Seu nome está em branco<br>";}
    if($idade < 15 or $idade > 75){ echo "Sua idade deve ser um valor entre 15 e 75 anos<br>";}
    if($periodo != 'V' and $periodo != 'N'){ echo "Período deve ser V-Vespertino ou N-Noturno<br>";}
    if($modulo < 1 or $modulo > 4){ echo "Módulo tem que ser um valor entre 1 e 4<br>";}
?>