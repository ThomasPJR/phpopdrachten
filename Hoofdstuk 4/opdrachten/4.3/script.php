<?php
    $task2 = "";
    $task2Counter = 19;
    while($task2Counter >= 0)
    {
        if($task2Counter == 19)
        {
            $task2 = "Taak 2<br>" . "Lancering in: " . $task2Counter . ", ";
        }

        elseif($task2Counter > 0)
        {
            $task2 = $task2 . $task2Counter . ", ";
        }
        else
        {
            $task2 = $task2 . $task2Counter . "<br><br>";
        };
        $task2Counter--;
    }

    $task3 = "Lancering in: ";

    for($counter = 19; $counter >= 0; $counter--)
    {
        if($counter == 19)
        {
            $task3 = "Taak 3<br>" . $task3 . $counter . ", ";
        }

        elseif($counter > 0)
        {
            $task3 = $task3 . $counter . ", ";
        }
        else
        {
            $task3 = $task3 . $counter . "<br><br>";
        };
    }

    $task4 = "";
    $task4Counter = 1;
    while($task4Counter < 7)
    {
        if($task4Counter == 1)
        {
            $task4 = "Taak 4<br>" . "<h" . $task4Counter . ">Dit is de " . $task4Counter . "e itteratie.<br>";
        }
        else
        {
            $task4 = $task4 . "<h" . $task4Counter . ">Dit is de " . $task4Counter . "e itteratie.</h" . $task4Counter . "><br>";
        }

        $task4Counter++ ;
    }

    $task5 = "";
    for($task5Counter = 1; $task5Counter <= 10; $task5Counter++)
    {
        if($task5Counter == 1)
        {
            $task5 = "Taak 4<br>" . "<table><tr><td> Dit is de " . $task5Counter . "e itteratie.</td></tr><br>";
        }
        elseif ($task5Counter > 1 && $task5Counter < 10)
        {
            $task5 = $task5 . "<tr><td>Dit is de " . $task5Counter . "e itteratie </td></tr>";
        }
        else
        {
            $task5 = $task5 . "<tr><td>Dit is de " . $task5Counter . "e itteratie </td></tr></table>";
        }
    }

    $task6 = "";
    $task6Counter = 2020;
    $age = 19;
    while($task6Counter >= 2001)
    {
        if($task6Counter == 2020)
        {
            $task6 =  "Taak 5<br><p>In " . $task6Counter . " ben/wordt ik " . $age . " jaar oud</p>";
        }
        else
        {

            $task6 = $task6 . "<p>In " . $task6Counter ." was ik ". $age ." jaar oud</p>";
        }
        $task6Counter --;
        $age --;
    }

    $task7 = "";
    $agetask7 = 19;
    $task7Counter = 2020;
    while($task7Counter >= 2001)
    {
        if($task7Counter == 2020)
        {
            $task7 = "<br>Taak 6<br><p>In " . $task7Counter . " ben/wordt ik " . $agetask7 . " jaar oud</p>";
        }
        elseif ($agetask7 == 20)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een volwassen</p>";
        }
        elseif ($agetask7 == 18)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een adolescent</p>";
        }
        elseif ($agetask7 == 12)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een puber</p>";
        }
        elseif ($agetask7 == 8)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een tiener</p>";
        }
        elseif ($agetask7 == 4)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een kleuter</p>";
        }
        elseif ($agetask7 == 2)
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " en werd ik een peuter</p>";
        }
        else
        {
            $task7 = $task7 . "<p>In " . $task7Counter . " was ik " . $agetask7 . " jaar oud</p>";
        }
        $task7Counter--;
        $agetask7--;
    };
    echo $task2;
    echo $task3;
    echo $task4;
    echo $task5;
    echo $task6;
    echo $task7;
?>