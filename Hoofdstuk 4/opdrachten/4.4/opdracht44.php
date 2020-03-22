<?php
    for($counter = 1; $counter < 8; $counter++)
    {
        date_default_timezone_set("Europe/Amsterdam");


        $day = strtotime("+" . $counter . "days");

        echo "Day " . $counter . " is " . date("l d-m-Y", $day) . "<br>";
    }
?>