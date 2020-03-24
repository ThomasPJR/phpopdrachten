<?php
    for($counter = 1; $counter < 8; $counter++)
    {
        date_default_timezone_set("Europe/Amsterdam");

        //note hier
        $day = strtotime("+" . $counter . "days");

        echo "Day " . $counter . " is " . date("w l d-m-Y ", $day) . "<br>";

        //w staat voor dag nummer, zondag is 0
    }
?>