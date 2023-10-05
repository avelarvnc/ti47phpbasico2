<?php

    $v = $_GET["valor"];

    if ($v > 50)
    {
        echo "<p>Você está gastando muito.</p>";
    }
    else
    {
        echo "<p>Seu gasto está normal.</p>";
    }

?>

<a href="../index.html">Voltar</a>