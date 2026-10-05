<?php
    
    $noms = ["Anna", "Pau", "Júlia"];

    $notes = [
        "Anna"  => ["nota1" => 8, "nota2" => 9],
        "Joan"  => ["nota1" => 6, "nota2" => 7],
        "Pau"   => ["nota1" => 4, "nota2" => 5],
        "Clara" => ["nota1" => 9, "nota2" => 10],
        "Júlia" => ["nota1" => 7, "nota2" => 8]
    ];
    
    foreach ($noms as $nom) {

        $nota1 = $notes[$nom]["nota1"];
        $nota2 = $notes[$nom]["nota2"];

        $mitjana = ($nota1 + $nota2) / 2;

        if($mitjana < 5) {
            $resultat = "Suspes";
        } elseif ($mitjana < 7) {
            $resultat = "Aprovat";
        } elseif ($mitjana < 9) {
            $resultat = "Notable";
        } else {
            $resultat = "Excel·lent";
        }

        
        echo "<li> $nom </li>";
        echo "<li> $nota1 </li>";
        echo "<li> $nota2 </li>";
        echo "<li> $mitjana </li>";
        echo "<li> $resultat </li>";
        echo "<br>";
    }

?>