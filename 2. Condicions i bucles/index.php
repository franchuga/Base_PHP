<?php
$nom = "Francesc";
$edat = 19;
$correu = "frgu186@vidalibarraquer.net";
$telefon = "";
$nota = 8;
$registre = null;

isset($nom);
isset($edat);
isset($correu);
isset($telefon);
isset($nota);
isset($registre);

empty($nom);
empty($edat);
empty($correu);
empty($telefon);
empty($nota);
empty($registre);

is_null($nom);
is_null($edat);
is_null($correu);
is_null($telefon);
is_null($nota);
is_null($registre);

if ($edat > 17){
    echo "<p> Ets major d'edat </p>";
} else {
    echo "<p> Ets menor d'edat </p>";
}

if ($nota >= 5){
    if ($nota >= 5 && $nota < 7){
        echo "<p> Aprovat </p>";
    }
    if ($nota >= 7 && $nota < 9){
        echo "<p> Notable </p>";

    }
    if ($nota >= 9){
        echo "<p> Excelent </p>";
    }
} else {
    echo "<p> Has suspes </p>";
}

if (empty($telefon) && filter_var($correu, FILTER_VALIDATE_EMAIL)) {
    echo "<p> Avis 1</p>";
}

if(empty($registre)){
    echo "<p> Avis 2</p>";
}

?>
<ul>
    <li><?= $nom ?></li>
    <li><?= $edat ?></li>
    <li><?= $correu ?></li>
    <li><?= $telefon ?></li>
    <li><?= $nota ?></li>
    <li><?= $registre ?></li>
</ul>