<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palaute – Vaurioapu</title>
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
      max-width: 800px;
      margin: 3rem auto;
      background: white;
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #d40000;
      margin-bottom: 1.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input[type=text],
    textarea {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    input[type=submit] {
      background-color: #d40000;
      color: white;
      border: none;
      padding: 0.9rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s;
      width: fit-content;
      align-self: flex-end;
    }

    input[type=submit]:hover {
      background-color: #a90000;
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
  <h1>Ota yhteyttä</h1>
  <p>Voit lähettää meille palautetta tai korjauspyynnön alla olevalla lomakkeella.</p>

  <form action="lahetys.php" method="post">
    <label for="nimi">Nimi</label>
    <input type="text" id="nimi" name="nimi" required>

    <label for="viesti">Palaute</label>
    <textarea id="viesti" name="viesti" required></textarea>

    <input type="submit" value="Lähetä">
  </form>
</main>

<footer>

</footer>

</body>
</html>
