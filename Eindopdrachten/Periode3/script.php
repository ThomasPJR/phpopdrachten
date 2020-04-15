<!doctype html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
</html>

<?php
$loginData = array
(
    "Jaelle"=>"Jaelle123",
    "Rachel"=>"Rachel123",
    "Thomas"=>"Thomas123",
    "Lukas"=>"Lukas123",
    "Siebe"=>"Siebe123",
    "Teun"=>"Teun123",
    "Daniel"=>"Daniel123",
    "Arend"=>"Arend123",
    "Vincent"=>"Vincent123",
    "Jill"=>"Jill123"
);

$message = "";

$username = $_POST["username"];
$password = $_POST["password"];

foreach ($loginData as $loginName => $passw) {
    if ($loginName === $username && $passw === $password) {
        $login = true;
    } else {
        $login = false;
    }

    if ($login) break;
}

if (empty($username) || empty($password))
{
    $message = "Een van de twee of beide waarden is/zijn niet ingevuld";
}
elseif ($login)
{
    ?>
    <div id="fullscreen"></div>
    <h1 id="welkom">Welkom!</h1>
    <div id="links">
        <h1>Openingstijden</h1>
        <p>
            Donderdag: 22:00 <br>
            Vrijdag: Hele dag <br>
            Zaterdag: Hele dag <br>
            Zondag: 12:00
        </p>
    </div>
    <div id="rechts">
        <h1>Adresgegevens</h1>
        <p>
            AM Wriezener Bahnhof <br>
            10243 Berlin <br>
            Duitsland <br>
        </p>
    </div>
    <h1 id="verboden">
        Deze gegevens dien je ten alle tijden geheim te houden!
    </h1>
    <?php
}

else
{
    $message = "U gegevens zijn niet gevonden";
}
echo $message;