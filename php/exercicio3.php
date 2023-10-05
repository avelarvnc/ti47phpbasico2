<?php

    $altura = $_GET["altura"];
    $genero = $_GET["genero"];

    $ideal;

    if ($genero == "Masculino")
    {
        $ideal =  (72.7 * $altura) - 58;
    }
    else if ($genero == "Feminino")
    {
       $ideal = (62.1 * $altura) - 44.7; 
    }

    if (isset($ideal))
    {
        echo "<p>Seu peso ideal é " . $ideal . "</p>";
    }
    else
    {
        echo "<p>Valores incorretos. Favor tentar novamente.</p>";
    }

    

?>

<a href="../index.html">Voltar</a>