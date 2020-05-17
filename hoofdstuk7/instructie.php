<?php
//phpinfo();

// Open de database connectie en ODBC driver

//probeerd code
try
{
    //maakt verbinding met database
    $pdo = new PDO("odbc:odbc2sqlserver");
}
//toond foutmelding
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";


// Uitvoeren van een SQl query
//Probeer tabel te benaderen
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren

    //pdo->query haalt data op
    $result = $pdo->query($sql);
}
//
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}

// Lege Array aanmaken voor de results
$aJokes = array();


// Door de results heen loopen via een while

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

// Tonen van de inhoud van aJokes
echo "<pre>";
var_dump($aJokes);
echo "</pre>";