<?php

function laskeToimituskulut($toimitustapa) {
    switch ($toimitustapa) {
        case "Nouto":
            return 0.00;
        case "Postipaketti":
            return 6.90;
        case "Kotiinkuljetus":
            return 12.50;
        default:
            return -1;
    }
}

$valittu_tapa = "Postipaketti";

$hinta = laskeToimituskulut($valittu_tapa);
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Laske toimituskulut</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h1 {
            font-size: 26px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
        }
        .hinta {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Laske toimituskulut</h1>

    <?php if ($hinta != -1): ?>
        <p>Valittu toimitustapa: <?= htmlspecialchars($valittu_tapa) ?></p>
        <p class="hinta">Toimituskulut: <?= number_format($hinta, 2, ',', ' ') ?> €</p>
    <?php else: ?>
        <p style="color:red;">Virheellinen toimitustapa</p>
    <?php endif; ?>
</body>
</html>
