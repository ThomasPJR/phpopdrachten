<?php
    /*
     * User: Thomas Ruijters
     * Date: 2/11/2020
     * Time: 12:20 PM
     * File: opdracht_3-1.php
     */
    ?>

    <?php
    include "../Includes/header.php";
    ?>

    <?php
    include "../Includes/aside.php";
    ?>

    <div id="wrapper2">

    <?php
     /*
         name                Thomas Ruijters
         filename            opdracht3.2
         assignment          3.2
         date                20/2/2020
     */

        //taak 1
        $trafficLightColor = "groen";
        $ambulanceComing = false;
        $driveOn = true;

        if($trafficLightColor == "groen" && $ambulanceComing == false)
        {
            $driveOn = true;
            echo "U mag door rijden";
        }
        else
        {
            $driveOn = false;
            echo "U moet stoppen";
        }

        //    if($driveOn == true)
        //    {
        //        echo "U mag door rijden";
        //    }
        //    else
        //    {
        //        echo "U moet stoppen";
        //    }


        //taak2

        $countryName = "Belgie";
        $currentAge = "16";

        if($countryName == "Nederland" && $currentAge < 18 || $countryName == "Belgie" && $currentAge < 16|| $countryName == "Bulgarije" && $currentAge < 18 || $countryName == "Zweden" && $currentAge < 18 || $countryName == "Cyprus" && $currentAge < 17)
        {
            echo "</br></br> Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.</br>" .
                "Je mag niet drinken";
        }

        //Nederland, Bulgije, Cyprus weg laten, leeftijd voor zwakke en sterke drank is hetzelfde

        else if($countryName == "Belgie" && $currentAge >= 16 && $currentAge < 18|| $countryName == "Zweden" && $currentAge >= 18 && $currentAge <20)
        {
            echo "</br></br> Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.</br>" .
                "Je mag zwakke drank drinken";
        }

        else if($countryName == "Belgie" && $currentAge >= 18|| $countryName == "Zweden" && $currentAge >= 20 || $countryName == "Nederland" && $currentAge == 18|| $countryName == "Bulgarije" && $currentAge == 18 || $countryName == "Cyprus" && $currentAge == 17)
        {
            echo "</br></br> Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.</br>" .
                "Je mag alle drank drinken";
        }
        ?>
    </div>

    <?php
        include "../Includes/footer.php";
    ?>