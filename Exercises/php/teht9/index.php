<?php
// index.php — Etusivu
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaurioapu – Etusivu</title>
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

        h1 {
            text-align: center;
            margin-top: 3rem;
            font-size: 2.2rem;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 2rem auto;
            max-width: 1000px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            flex: 1 1 280px;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .card h3 {
            color: #d40000;
            margin-bottom: 0.75rem;
        }

        .card p {
            flex-grow: 1;
        }

        .card a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.6rem 1.2rem;
            background-color: #d40000;
            color: white;
            border-radius: 25px;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #a90000;
        }

        section {
            max-width: 1000px;
            margin: 3rem auto;
            padding: 1rem;
        }

        section img {
            width: 100%;
            border-radius: 12px;
            margin-top: 1rem;
        }

        footer {
            background-color: #222;
            color: #aaa;
            text-align: center;
            padding: 1rem;
            margin-top: 4rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Vaurioapu</div>
    <nav>
        <a href="index.php">Etusivu</a>
        <a href="palvelut.php">Palvelut</a>
        <a href="palaute.php">Ota yhteyttä</a>
    </nav>
</header>

<main>
    <h1>Etusivu</h1>
    <div class="services">
        <div class="card">
            <h3>Tuulilasinvaihto</h3>
            <p>Korjaamme ja vaihdamme tuulilaseja nopeasti ja vaivattomasti – usein ilman ilmoituksen tekemistä vakuutusyhtiölle.</p>
            <a href="palvelut.php#tuulilasinvaihto">Lue lisää</a>
        </div>
        <div class="card">
            <h3>Kolarihuolto</h3>
            <p>Hoidamme vahinkotarkastukset ja vakuutusasiat puolestasi, jotta autosi palautuu ajokuntoon nopeasti ja huolettomasti.</p>
            <a href="palvelut.php#kolarihuolto">Lue lisää</a>
        </div>
        <div class="card">
            <h3>Toistuvat huollot ja korjaukset</h3>
            <p>Tarjoamme öljynvaihdot, määräaikaishuollot ja muut pienkorjaukset luotettavasti ja edullisesti.</p>
            <a href="palvelut.php#huollot">Lue lisää</a>
        </div>
    </div>

    <section>
        <h2>Meistä</h2>
        <p>Vaurioapu on kotimainen autokorjaamo, joka tarjoaa laadukasta ja nopeaa palvelua kaikissa auton huolto- ja korjaustarpeissa.
        Olemme toimineet alalla yli 10 vuotta ja palvelemme asiakkaita ammattitaidolla ja ystävällisellä otteella.</p>
        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=900&q=60" alt="Autokorjaamo">
    </section>
</main>

<footer>

</footer>

</body>
</html>
