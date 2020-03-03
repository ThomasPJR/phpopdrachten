<?php
/*
 * User: Thomas Ruijters
 * Date: 2/11/2020
 * Time: 12:20 PM
 * File: opdracht_3-1.php
 */
?>

<?php

    $elf = " Elfstedentocht ";
    $Alv = " Alvestêdetocht ";
    $km = 200;
    $schaatst = " schaatstocht ";
    $nat = " natuurijs ";
    $Koning = " Koninklijke Vereniging De Friesche Elf Steden";
    $leeuw = " Leeuwarden";
    $Fries = " Friesland";
    $maal = 15;
    $first = 1909;
    $max = 1;

    $verhaal = "<p> De ". $elf . "(Fries: " . $Alv . ") is een " . $km . " kilometer
    lange " . $schaatst . "over" . $nat . "die wordt georganiseerd door
    de " . $Koning . $leeuw . ",
    de hoofdstad van" . $Fries . ", is start- en aankomstplaats. De
    Elfstedentocht is inmiddels" . $maal . "maal verreden en werd voor het
    eerst in " . $first . "gereden en wordt maximaal" . $max . "keer per winter
    gehouden. </p>";
    //Ik heb het al in 1 keer met punten gedaan

    echo $verhaal;
    //na controle leraar, verhaal in variabel opgeslagen.

//ongeacht je een nummer echo'd of niet, houd het een number, geen strings.
//Vermijd spaties in variabel waardes.
?>