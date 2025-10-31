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

$yhteenveto = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maara = (int)$_POST["maara"];
    $toimitustapa = $_POST["toimitustapa"];

    $hinta_kpl = 349.90;
    $tuotteen_nimi = "Sähköpotkulauta";

    $valisumma = $hinta_kpl * $maara;
    $toimituskulut = laskeToimituskulut($toimitustapa);
    $kokonaishinta = $valisumma + $toimituskulut;

    $yhteenveto = "
        <div class='summary'>
            <h2>Tilauksen yhteenveto</h2>
            <p><strong>Määrä:</strong> {$maara} kpl</p>
            <p><strong>Välisumma:</strong> " . number_format($valisumma, 2, ',', ' ') . " €</p>
            <p><strong>Toimitustapa:</strong> {$toimitustapa}</p>
            <p><strong>Toimituskulut:</strong> " . number_format($toimituskulut, 2, ',', ' ') . " €</p>
            <p><strong>Yhteensä:</strong> " . number_format($kokonaishinta, 2, ',', ' ') . " €</p>
        </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tilauslomake</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f5f6fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 420px;
            background-color: #fff;
            margin: 60px auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
        }
        h3 {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .summary {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .summary h2 {
            margin-bottom: 15px;
        }
        .summary p {
            margin: 6px 0;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tilaa tuote</h1>

        <h3>Tuote: Sähköpotkulauta (349,90 €/kpl)</h3>

        <form method="post" action="tilaus.php">
            <label for="maara">Määrä:</label>
            <input type="number" name="maara" id="maara" min="1" value="1" required>

            <label for="toimitustapa">Toimitustapa:</label>
            <select name="toimitustapa" id="toimitustapa" required>
                <option value="Nouto">Nouto (0,00 €)</option>
                <option value="Postipaketti">Postipaketti (6,90 €)</option>
                <option value="Kotiinkuljetus">Kotiinkuljetus (12,50 €)</option>
            </select>

            <button type="submit">Laske hinta</button>
        </form>

        <?php
        if ($yhteenveto !== null) {
            echo $yhteenveto;
        }
        ?>
    </div>
</body>
</html>
