<?php
/*
 * User: Thomas Ruijters
 * Date: 2/5/2020
 * Time: 2:38 PM
 * File: index.php
 */
?>
<footer>
    <p>
        Gemaakt door: de heer T Ruijters.<br>
        <?php
            include "../hoofdstuk3/variabelen.php";
            date_default_timezone_set("Europe/Amsterdam");
            $uur = date("H");
            echo $year . "     -     " . $name . "<br><br>";

//            Uur tussen: Wens:
//            0-5 Goedennacht
//            5-12 Goedenochtend
//            12-17 Goedenmiddag
//            17-24 Goedenavond

            if($uur >= 0 && $uur <= 5)
            {
                echo "Goedennacht";
            }
            elseif($uur > 5 && $uur < 12)
            {
                echo "Goedenochtend";
            }
            elseif($uur >= 12 && $uur < 17)
            {
                echo "Goedemiddag";
            }
            elseif($uur >= 17 && $uur < 12)
            {
                echo "Goedenavond";
            }
            else
            {
                echo "Current time unknown, good day sir/mam";
            }
        ?>
    </p>
</footer>
</body
</html>