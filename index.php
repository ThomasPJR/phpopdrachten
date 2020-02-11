<?php
/*
 * User: Thomas Ruijters
 * Date: 2/5/2020
 * Time: 2:38 PM
 * File: index.php
 */
?>


<html>
    <head>
        <title>
            Opdracht X.X
        </title>

        <link type="text/css" rel="stylesheet" href="CSS/style.css"/>
        <meta name="description" content="Omschrijving over de website">
        <meta name="keywords" content="sleutelwoord1, sleutelwoord2">
        <meta charset="utf-8">
        <meta name="lang" content="en">
    </head>
    <body>
    <?php
        echo "Hello world";
    ?>
        <header>
            <h1>
                ICT academie AO
            </h1>
        </header>

        <aside>
            <h2>Menu</h2>
            <ul>
                <li>
                    <div id="wrapper">
                        <a href="../index.php">Terug</a>
                    </div>
                </li>
                <li>Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
    </body>
</html>
