<?php
/*
 * User: Thomas Ruijters
 * Date: 2/3/2020
 * Time: 11:05 PM
 * File: Date Functie.php
 */
?>

<?php
    date_default_timezone_set("Europe/Amsterdam");
    echo date("D-m-Y H:i");

    echo $day = date("l");

    if ($day == "Monday")
    {
        echo("TIS MAANDAG, kut leven");
    }
    elseif ($day == "Wednesday")
    {
        echo ("Tis dinsdag, nog ff door, bijna weekend");
    }
    else
    {
        echo("Ik ben lui, dont judge");
    }
?>