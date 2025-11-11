<?php
$nimi = $_POST["nimi"];
$viesti = $_POST["viesti"];

$ok = mail(
    "janne.pennanen@vuoksi.fi",
    "Palautetta sivustolta",
    "Nimi: $nimi\nViesti: $viesti"
);

if ($ok) {
    header("Location: kiitos.php");
} else {
    header("Location: virhe.php");
}
exit;
?>
