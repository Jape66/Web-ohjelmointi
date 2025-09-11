<?php
//Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kayttaja = $_POST["kayttaja"] ?? "";
    $salasana = $_POST["salasana"] ?? "";
    //Lisää alle koodi joka ottaa vastaan lomakkeen tiedot
 

    //Korjaa ja täydennä alla oleva if-lause joka tarkistaa käyttäjätunnuksen ja salasanan
    if ($kayttaja === "admin" && $salasana === "kissa123"){
        //Kirjautuminen onnistui


        //Alla oleva koodi ohjaa käyttäjän palkkalaskuriin 2 sekunnin kuluttua
        echo 'Siirrytään palkkalaskuriin!'
        echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
        exit();
    } else {
        //Kirjautuminen epäonnistui
        echo 'echooo';
    }
}
?>