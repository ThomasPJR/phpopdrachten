<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
require ('lesopdracht_functions53.php');
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
                if(!empty($_GET['firstname']))
                {
                    echo $_GET['firstname'];
                }
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td>
            <?php
                if(!empty($_GET['tussenvoegsel']))
                {
                echo $_GET['tussenvoegsel'];
                }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>
            <?php
                if(!empty($_GET['lastname']))
                {
                    echo $_GET['lastname'];
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
                if(isset($_GET['subject']))
                {
                    echo $_GET['subject'];
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>Leraar</td>
        <td>
            <?php
                echo getTeacherName()
            ?>
        </td>
    </tr>
</table>