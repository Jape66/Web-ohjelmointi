<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <title>Lähetys epäonnistui – Vaurioapu</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fafafa;
      color: #222;
      margin: 0;
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
      text-align: center;
      margin-top: 4rem;
    }

    .box {
      background: white;
      display: inline-block;
      padding: 2rem 3rem;
      border-radius: 16px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h1 {
      color: #d40000;
      margin-bottom: 0.5rem;
    }

    a {
      color: #d40000;
      text-decoration: none;
      font-weight: bold;
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
    <a href="palaute.php">Palaute</a>
  </nav>
</header>

<main>
  <div class="box">
    <h1>Viestin lähetys epäonnistui</h1>
    <p>Järjestelmässä tapahtui virhe. Yritä hetken kuluttua uudelleen.</p>
    <p><a href="palaute.php">Palaa takaisin</a></p>
  </div>
</main>

<footer>

</footer>

</body>
</html>
