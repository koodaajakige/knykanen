<?php

//require = tiedosto tarvitaan (esim.funktio), jotta ohjelma jatkuu
//include = tiedostoa ei välttämättä tarvita, hyvä lisäke 

require_once('funktio.php');

// Määritellään tietokantayhteyden muodostamisessa
// tarvittavat tiedot.
$dsn = "mysql:host=localhost;" .
"dbname={$_SERVER['DB_DATABASE']};" .
"charset=utf8mb4";
$user = $_SERVER['DB_USERNAME'];
$pass = $_SERVER['DB_PASSWORD'];
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

// Tarkistetaan, onko URL-osoitteessa annettu hash-parametri.
if (isset($_GET["hash"])) {

  // hash-parametrilla on arvo, poimitaan se muuttujaan.
  $hash = $_GET["hash"];

  try {
    // Avataan tietokantayhteys luomalla PDO-oliosta ilmentymä.
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Alustetaan hakukysely.
    $stmt = $pdo->prepare("SELECT url
                             FROM osoite
                             WHERE tunniste = ?");
    // Suoritetaan kysely ja haetaan tuloksen rivi.
    $stmt->execute([$hash]);
    $rivi = $stmt->fetch();

    // Tarkistetaan, onko taulukossa arvoa hash-muuttujan arvolla.
    //if (isset($osoitteet[$hash])) {

    // Taulukossa on hash-muuttujaa vastaava avain, haetaan osoite.
    //$url = $osoitteet[$hash];
    
    if ($rivi) {
    // Edelleenohjataan riviltä löytyvään osoitteeseen.
    $url = $rivi['url'];
    header("Location: " . $url);
    exit;

    } else {
      // Taulukosta ei löytynyt hash-muuttujaa vastaavaa riviä,
      // tulostetaan virheilmoitus.
      echo "Väärä tunniste :(";
    }

  } catch (PDOException $e) {
    //Avaamisessa tapahtui virhe, tulostetaan virheilmoitus.
    echo $e->getMessage();
  }

//} else {

  //Tähän tulee lomake.
  //include 'lomake.html';
  // hash-parametrilla ei ole arvoa, tulostetaan käyttäjälle
  // esittelyteksti.
  //echo "Tämä on osoitteiden lyhentäjä. Odota maltilla, " .
  //"tänne tulee tulevaisuudessa lisää toiminnallisuutta.";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Lyhentäjä</title>
  <meta charset='UTF-8'>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class='page'>
    <header>
      <h1>Lyhentäjä</h1>
      <div>ällistyttävä osoitelyhentäjä</div>
    </header>
    <main>
      TODO: tähän tulee sisältö..
    </main>
    <footer>
      <hr>
      &copy; Kurpitsa Solutions
    </footer>
  </div>
  </body>
</html>


