<?php


    // Inladen functies bestand
    include("functions.php");

    // Starten van een database connectie
    startConnection();

    // Executeren van een SQL query
    $query = "";

    if(isset($_GET["search"]))
    {
        $query = "SELECT * FROM joke";
        if(!empty($_GET["search"]))
        {
            $temp = $_GET["search"];

            $query = "SELECT * FROM joke WHERE joketext LIKE '%$temp%'";
        }
    }


    $jokes = executeQuery($query);


    echo "<p> $query </p>";
    ?>

    <form method="get">
        <label for="search">Zoekterm</label><input id="search" type="text" name="search"><button type="submit">Zoeken</button><br/>
        <hr>
    </form>
    <table>
        <thead>
            <tr>
                <td>
                    JokeID
                </td>
                <td>
                    JokeText
                </td>
                <td>
                    JokeClou
                </td>
                <td>
                    JokeDate
                </td>
            </tr>
        </thead>
        <tbody>
            <?php

                // Resultaten rij voor rij ophalen
                while ($row = $jokes->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr>" .
                        "<td>" . $row["id"] . "</td>" .
                        "<td>" . $row["joketext"] . "</td>" .
                        "<td>" .  $row["jokeclou"] . "<td>" . $row["jokedate"] . "</td>" .
                        "</tr>";
                }
            ?>
        <tbody>
    </table>



