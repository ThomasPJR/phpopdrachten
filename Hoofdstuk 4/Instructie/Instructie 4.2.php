<?php
    $day = date("l");
    echo $day . "<br>";

    switch ($day)
    {
        case "Monday":
            echo "Het is vandaag maandag";
            break;
        case "Tuesday":
            echo "Het is vandaag dinsdag";
            break;

        default:
            echo "Today its" . $day;
    };