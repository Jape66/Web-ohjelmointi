<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$vklplisa = $_POST["vklplisa"] ?? 0;
$vklppaivat = $_POST["vklppaivat"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara;
$vklppalkka = $yhteispalkka + ($vklplisa * $vklppaivat);
echo "Yhteispalkka ilman viikonloppulisiä: " . $yhteispalkka;
echo "Yhteispalkka viikonloppulisien kanssa:" . $vklppalkka;
?>