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
    verificatEdat($nom, $edat);
    taulaMultiplicar($multiplicar);
    compteEnrere($multiplicar);

    }

    ?>

</body>
</html>

    <?php
        function verificatEdat( $nom, $edat ) {
            if(!empty($edat) && !empty($nom)) {
                echo "Hola $nom, tens $edat anys. <br>";
                if ($edat >= 18) {
                    echo "Ets major d'edat.";
                } else {
                    echo "Ets menor d'edat.";
                }
            } else {
            echo "Omple tots els camps";
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



    ?>