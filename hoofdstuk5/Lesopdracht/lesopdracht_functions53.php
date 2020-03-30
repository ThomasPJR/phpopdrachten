<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName(){
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.

    $courseName = "";


    /*
        PHP                         Meneer Evers
        ASP                         Meneer Van der Meer
        SQL                         Meneer Van de Wetering
        JavaScript                  Meneer Van de Wetering

        HTML                        Meneer Gijsbrechts & Meneer Evers
        Usability                   Meneer Van de Wetering
        Hardware                    Meneer Saebu

        Computertekenen             Meneer Van de Berg
        Digitale vaardigheden       Mevrouw Pilage

        Rekenen                     Meneer Van der Meer
        Engels                      Mevrouw Mitrovich
        Nederlands                  Meneer Van der Ende

        Burgerschap                 Mevrouw De Ruiter
        Studievaardigheden          Mevrouw De Ruiter
        Loobbaan                    Mevrouw De Ruiter
     */

        switch ($courseName)
        {
            case "PHP":
                $teacher = "Meneer Evers";
              break;
            case "ASP":
                $teacher = "Meneer van der Meer";
              break;
            case "SQL":
                $teacher = "Meneer van de Wetering";
                break;
            case "HTML":
                $teacher = "Meneer Gijsbrechts & Meneer Evers";
                break;
            case "JavaScript":
                $teacher = "Meneer van de Wetering";
                break;
            case "Usability":
                $teacher = "Meneer van de Wetering";
                break;
            case "Hardware":
                $teacher = "Meneer Saebu";
                break;
            case "Computertekenen":
                $teacher = "Meneer van de Berg";
                break;
            case "Digitale vaardigheden":
                $teacher = "Mevrouw Pilage";
                break;
            case "Rekenen":
                $teacher = "Mr Van der Meer";
                break;
            case "Nederlands":
                $teacher = "Meneer van den Ende";
                break;
            case "Engels":
                $teacher = "Mevrouw Mitrovic";
                break;
            case "Burgerschap":
                $teacher = "Mevrouw de Ruiter";
                break;
            case "Studievaardigheden":
                $teacher = "Mevrouw de Ruiter";
                break;
            case "Loopbaan":
                $teacher = "Mevrouw de Ruiter";
                break;
        }

    return $teacher;
}
?>