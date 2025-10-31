<?php
// hintalaskuri.php

// Muuttujat
$tuotteen_nimi = "Sähköpotkulauta";
$hinta_kpl = 349.90;
$kappalemaara = 2;
$alennusprosentti = 15;

// Laskut
$valisumma = $hinta_kpl * $kappalemaara;
$alennus_eur = $valisumma * ($alennusprosentti / 100);
$loppusumma = $valisumma - $alennus_eur;
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tuotteen hintatiedot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h1 {
            font-size: 26px;
        }
        .rivi {
            margin-bottom: 4px;
        }
        hr {
            border: none;
            border-top: 1px solid #000;
            margin: 10px 0;
            width: 300px;
        }
        .loppusumma {
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Tuotteen hintatiedot</h1>
    
    <div class="rivi">Tuote: <?= $tuotteen_nimi ?></div>
    <div class="rivi">Kappalehinta: <?= number_format($hinta_kpl, 2, ',', ' ') ?> €</div>
    <div class="rivi">Määrä: <?= $kappalemaara ?> kpl</div>

    <hr>

    <div class="rivi">Välisumma: <?= number_format($valisumma, 2, ',', ' ') ?> €</div>
    <div class="rivi">Alennus (<?= $alennusprosentti ?>%): <?= number_format($alennus_eur, 2, ',', ' ') ?> €</div>

    <hr>

    <div class="loppusumma">Lopullinen hinta: <?= number_format($loppusumma, 2, ',', ' ') ?> €</div>
</body>
</html>
