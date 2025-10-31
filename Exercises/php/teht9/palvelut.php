<?php
// palvelut.php — Palvelut-sivu
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palvelut – Vaurioapu</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fafafa;
            color: #222;
        }

        header {
            background-color: #222;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .logo {
            font-weight: bold;
            font-size: 1.5rem;
            color: #ffd600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav a {
            color: #ddd;
            margin-left: 1.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffd600;
        }

        main {
            max-width: 1000px;
            margin: 3rem auto;
            padding: 1rem;
        }

        h1 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 2rem;
        }

        .service {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
        }

        .service img {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            flex: 1 1 400px;
        }

        .service-content {
            flex: 1 1 400px;
            padding: 2rem;
        }

        .service-content h2 {
            color: #d40000;
            margin-bottom: 1rem;
        }

        .service-content p {
            line-height: 1.6;
        }

        footer {
            background-color: #222;
            color: #aaa;
            text-align: center;
            padding: 1rem;
            margin-top: 4rem;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .service {
                flex-direction: column;
            }
            .service img {
                max-height: 250px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Vaurioapu</div>
    <nav>
        <a href="index.php">Etusivu</a>
        <a href="palvelut.php">Palvelut</a>
        <a href="#">Ota yhteyttä</a>
    </nav>
</header>

<main>
    <h1>Palvelumme</h1>

    <!-- Tuulilasinvaihto -->
    <div class="service" id="tuulilasinvaihto">
        <img src="images/tuulilasinvaihto.jpg" alt="Rikkoutunut tuulilasi">
        <div class="service-content">
            <h2>Tuulilasinvaihto</h2>
            <p>Onko tuulilasissa halkeama tai kiveniskemä? Vaihdamme tuulilasit nopeasti ja vaivattomasti vakuutuksen kautta – ilman jonoja ja turhaa paperityötä. Jos vakuutuksesi ei ole Fennialla, sinun ei tarvitse tehdä vahinkoilmoitusta vakuutusyhtiölle ja pystymme aloittamaan korjaustyöt heti, kun tuot auton korjaamollemme. Käytämme kaikissa asennuksissa laadukkaita ja kestäviä tuulilaseja.</p>
        </div>
    </div>

    <!-- Kolarihuolto -->
    <div class="service" id="kolarihuolto">
        <img src="images/kolarihuolto.jpg" alt="Kolarihuolto – auton korjaus">
        <div class="service-content">
            <h2>Kolarihuolto</h2>
            <p>Kolarin jälkeen autosi voi tarvita monenlaisia korjauksia. Me pystymme toteuttamaan minkä tahansa korjauksen nopeasti ja huolella. Tarjoamme kattavan palvelun, joka sisältää kaiken vauriotarkastuksesta ja peltikorjauksista aina maalaukseen, mekaanisiin korjauksiin ja sähkövikojen korjauksiin. Teemme yhteistyötä kaikkien vakuutusyhtiöiden kanssa ja hoidamme tarvittavat paperityöt puolestasi, jotta voit keskittyä tärkeämpiin asioihin.</p>
        </div>
    </div>

    <!-- Toistuvat huollot -->
    <div class="service" id="huollot">
        <img src="images/huollot.jpg" alt="Autohuolto – moottorin tarkastus">
        <div class="service-content">
            <h2>Toistuvat huollot ja muut korjaukset</h2>
            <p>Pidä autosi kunnossa säännöllisillä huolloilla ja korjauksilla! Tarjoamme määräaikaishuollot, öljynvaihdot ja muut toistuvat tarkastukset, jotka varmistavat autosi turvallisuuden ja suorituskyvyn. Lisäksi korjaamme viat, jotka eivät kuulu vakuutuksen piiriin, olipa kyseessä jarrujen uusinta, alustan korjaus tai sähköongelmat.</p>
        </div>
    </div>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> Vaurioapu. Kaikki oikeudet pidätetään.
</footer>

</body>
</html>
