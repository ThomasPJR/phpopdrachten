<?php
/**
 * User: Thomas Ruijters
 * Date: 30/05/2020
 * Time: 18:00
 * File: insert.php
 */

include "functions.php";

startConnection();
?>
    <div id="main">
        <h1>
            Nieuwe grap toevoegen
        </h1>
        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="joketext">Joketext</label>
                    </td>
                    <td>
                        <input type="text" id="joketext" name="joketext" placeholder="Grap hier">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jokeclou">Jokeclou</label>
                    </td>
                    <td>
                        <input type="text" id="jokeclou" name="jokeclou" placeholder="Punchline hier">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Verstuur" name="button">
                    </td>
                </tr>
            </table>
        </form>
    </div>
<?php

if(isset($_POST["button"]))
{
    $query = "INSERT INTO dbo.joke VALUES ('". $_POST["joketext"] ."', '" . $_POST["jokeclou"] . "', GETDATE())";

    executeQueryViaExec($query);
    echo $query;
?>

    <h1>
        Grap toegevoegd
    </h1>
    <p>
        Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:
        <br>
        <br>
        <i>joketext: </i><?php echo $_POST["joketext"] ?><br>
        <i>joketext: </i><?php echo $_POST["jokeclou"] ?><br>
        <br>
        <a href=".././7.3/index.php" style="text-decoration: none">Opdracht 7.3</a>
    </p>


<?php
}
?>