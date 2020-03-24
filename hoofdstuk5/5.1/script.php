<form method="get">
    <!-- voeg volgende keer een action toe-->
    <p>
        Deze opdracht is gemaakt voordat we de uitleg hebben gehad.<br>
        Dit komt door de corona situatie, waardoor wij nu uitleg missen op de deadline.<br>
        Ik zou u willen verzoeken hier rekening mee te houden binnen het nakijken.
    </p>

    <label for="bNaam"></label><br>
    <input type="text" id="bNaam" name="BEDRIJF">

    <label for="vNaam"></label><br>
    <input type="text" id="vNaam" name="VNAAM">

    <label for="aNaam"></label><br>
    <input type="text" id="aNaam" name="ANAAM">

    <label for="tNummer"></label><br>
    <input type="text" id="tNummer" name="TNUMMER">

    <label for="email"></label><br>
    <input type="text" id="email" name="EMAIL">

    <label for="bericht"></label><br>
    <textarea type="text" id="bericht" name="BERICHT"></textarea>

    <br><button type="submit">klik hier</button>

    <?php
    $bName = $_GET['BEDRIJF'];
    $vName = $_GET['VNAAM'];
    $aName = $_GET['ANAAM'];
    $tNumber = $_GET['TNUMMER'];
    $email = $_GET['EMAIL'];
    $message = $_GET['BERICHT'];
    ?>
</form>

<br>
<br>

<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php echo $bName;?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php echo $vName;?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php echo $aName;?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoonnummer:
        </td>
        <td>
            <?php echo $tNumber;?>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td>
            <?php echo $email;?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php echo $message;?>
        </td>
    </tr>
</table>

