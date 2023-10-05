<?php

    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    $n4 = $_GET["nota4"];

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media < 5)
    {
        echo "<p>Você está reprovado.</p>";
    }
    else
    {
        echo "<p>Você está aprovado.</p>"; 
    }

?>

<a href="../index.html">Voltar</a>