<?php

include "../../Includes/header.php";
include "../../Includes/aside.php";

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt" . "</br>";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
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

foreach ($aJokes as $jokes)
{
    $resultJoke = "</br>" .  $jokes["joketext"] . " " . $jokes["jokeclou"];

    echo $resultJoke;
}
?>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <td>
                id
            </td>
            <td>
                joketext
            </td>
            <td>
                jokeclou
            </td>
            <td>
                jokedate
            </td>
        </tr>
    </thead>
    <?php
        foreach ($aJokes as $jokes)
        {
            $resultTable = "<tr>" . "<td>" . $jokes["id"] . "</td>" . "<td>" . $jokes["joketext"] . "</td>" . "<td>" . $jokes["jokeclou"] . "</td>". "<td>" . $jokes["jokedate"] . "</td>" . "</tr>";

            echo $resultTable;
        }
    ?>
</table>
<?php
include "../../Includes/footer.php";
?>