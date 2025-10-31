<?php
// Määritellään sivut taulukkoon
$sivut = [
    'Etusivu' => 'etusivu.php',
    'Tuotteet' => 'tuotteet.php',
    'Ota yhteyttä' => 'yhteystiedot.php'
];

// Haetaan nykyisen sivun tiedostonimi
$nykyinen_sivu = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <ul>
        <?php foreach ($sivut as $nimi => $url): ?>
            <li class="<?php if ($nykyinen_sivu == $url) echo 'active'; ?>">
                <a href="<?php echo $url; ?>"><?php echo $nimi; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

<style>
    nav {
        background-color: #333;
        padding: 0;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    nav ul li {
        margin: 0;
    }
    nav ul li a {
        display: block;
        color: white;
        padding: 15px 25px;
        text-decoration: none;
    }
    nav ul li a:hover {
        background-color: #555;
    }
    nav ul li.active a {
        background-color: #007bff;
        color: white;
    }
</style>
