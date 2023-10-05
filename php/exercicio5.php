<?php

    $peso = $_GET["peso"];
    $altura = $_GET["altura"];
    $imc = $peso / ($altura * $altura);

    echo "<p>Seu IMC é: " . $imc . "</p>";

    if ($imc < 18.5)
    {
        echo "<p>Baixo peso.</p>";
    }
    else if ($imc < 24.99)
    {
        echo "<p>Peso normal.</p>";
    }
    else if ($imc < 29.99)
    {
        echo "<p>Sobrepreso</p>";
    }
    else
    {
        echo "<p>Obesidade</p>";
    }


?>

<a href="../index.html">Voltar</a>