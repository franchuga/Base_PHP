<html>
<head>
    <title>Edat i nom</title>
</head>
<body>
    <h1> Formulari </h1>
    <form method="post">
        Nom: <input type="text" name="nom"><br>
        Edat: <input type="number" name="edat"><br>
        Taula de multiplicar (entre 1 i 10): <input type="number" name="multi"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $edat = $_POST["edat"];
    $multiplicar = $_POST["multi"];

    if (empty($nom) || empty($edat) || empty($multiplicar)) {
        echo "<p style='color:red;'>Error: No poden haber camps buits</p>";
    }

    elseif ($multiplicar < 1 || $multiplicar > 10) {
        echo "<p style='color:red;'>Error: El numero de multiplicar a d'estar entre 1 i 10.</p>";
    } 

    else {

    verificatTot($nom, $edat);
    taulaMultiplicar($multiplicar);
    compteEnrere($multiplicar);
    $notes = [6, 7.5, 8];
    echo "<br>Les notes son:<br>";
    foreach ($notes as $nota) {
        echo "· " . $nota . "<br>";
    }
    mitjana($notes);
    }
    }
    ?>

</body>
</html>

    <?php
        function verificatTot( $nom, $edat ) {
            if(!empty($edat) && !empty($nom)) {
                echo "Hola $nom, tens $edat anys. <br>";
                $veredicte = esMajorEdat($edat);
                if ($veredicte == true) {
                    echo "Ets major d'edat.";
                } else {
                    echo "Ets menor d'edat.";
                }
            } else {
            echo "Omple tots els camps";
            }
        };

        function esMajorEdat ($edat) {
            if ($edat >= 18) {
                return true;
            } else {
                return false;
            }
        };

        function taulaMultiplicar( $multiplicar ){
            echo "<br> Taula de multiplicar";
            for($i = 0; $i < 11; $i++) {
                $total = $multiplicar * $i;
                echo "<br>$total";
            }
        };

        function compteEnrere( $multiplicar ) {
            echo "<br> Compte enrere:";
            while ( $multiplicar > 0) {
                echo "<br> $multiplicar";
                $multiplicar --;
            }
        };

        function mitjana ( $notes ) {
            $resultat = array_sum($notes) / count($notes);
            echo "<br>La mitjana de les notes és: " . round($resultat, 2) . "<br>";
        };

    ?>