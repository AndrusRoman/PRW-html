<?php
    $grand = $_POST['gra'];
    $medio = $_POST['med'];
    $peq = $_POST['peq'];

    $total = $peq*10 + $medio*12 + $grand*15;

    echo "Total arrecadado = $total<br>";
    echo "Quantidade total pequeno: ",$peq*10;
    echo "<br>Quantidade total médio: ",$medio*12;
    echo "<br>Quantidade total grande: ",$grand*15;
?>