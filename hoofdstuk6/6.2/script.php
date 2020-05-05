<h1>
    steen papier schaar, wa leuk
</h1>
<form id="gameFrm" method="get" action="script.php">
    <div class="float">
        <input type="radio"
                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                  value="steen">steen
    </div>
    <div class="float"><input type="radio"
                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                              value="papier">papier
    </div>
    <div class="float"><input type="radio"
                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                              value="schaar">schaar
    </div>
</form>

<?php
session_start();

if
(
    !isset($_SESSION['user1']) ||
    !isset($_SESSION['user2'])
)
{
    $_SESSION['player'] = 0;
    $_SESSION['NPC'] = 0;
}

if (isset($_GET['keuze']))
{
    echo "Jij koos: " . $_GET['keuze'];

    //Wat kiest de computer
    //Random wordt er een getal tussen 0 en 2 gekozen

    $opties = array("steen", "papier", "schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos:" . $computerkeuze;


    $spelerkeuze = $_GET['keuze'];

    if
    (
        $spelerkeuze === "steen" && $computerkeuze === "schaar" ||
        $spelerkeuze === "papier" && $computerkeuze === "steen" ||
        $spelerkeuze === "schaar" && $computerkeuze === "papier"
    )
    {
        $_SESSION['player'] += 1
    }

    elseif
    (
        $computerkeuze === "schaar" && $spelerkeuze === "schaar" ||
        $computerkeuze === "papier" && $spelerkeuze === "steen" ||
        $computerkeuze === "schaar" && $spelerkeuze === "papier"
    )
    {
        $_SESSION['NPC'] += 1;
    }

    elseif
    (
        $spelerkeuze === "steen" && $computerkeuze === "steen" ||
        $spelerkeuze === "papier" && $computerkeuze === "papier" ||
        $spelerkeuze === "schaar" && $computerkeuze === "schaar"
    )
    {
        echo "nope";
    }
}
$_SESSION['player'] = 0;
$_SESSION['NPC'] = 0;
if($_SESSION['player'] === 5 || $_SESSION['NPC'] === 5)
{
    echo "you won, congrats, want a sticker?";
    session_destroy();
}