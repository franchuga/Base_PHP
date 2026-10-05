<?php
    $nom = "Francesc";
    $edat_str = "18";
    $nota_float = 9.5;
    $aprovat = true;

    $edat = (int)$edat_str;
    $sumEdatNota = $edat + $nota_float;
    echo $edat;
    echo "<p> Nom: $nom </p>";
    echo "<p> Edad: $edat </p>";
    echo "<p> Nota: $nota_float </p>";
    echo "<p> Sum edat + nota: $sumEdatNota </p>";

    if ($aprovat) {
        echo "<p> L'alumne $nom ha aprovat </p>";
    } else {
        echo "<p> L'alumne $nom ha suspes </p>";
    }

    $edat = (string)$edat;
    $nota_float = (int)$nota_float;

    echo "<p> Edad: $edat </p>";
    echo "<p> Nota: $nota_float </p>";
?>