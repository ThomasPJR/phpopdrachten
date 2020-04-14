<?php
    /*
         Opdracht:      Eindopdracht
         Naam:          Thomas Ruijters
         Document:      script.php
         Datum:         6-4-2020
    */
?>

<?php
    include "login.php";
?>
<h1>
    Bergheen
</h1>
<p>
    Login om onze adresgegevens + openingstijden te zien
</p>
<form action="script.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br>
    <button type="submit" name="submit">Verstuur</button>
</form>