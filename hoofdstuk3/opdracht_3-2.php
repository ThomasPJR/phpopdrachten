<?php
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