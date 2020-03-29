<table>
    <tr>
        <td>
            Voor en achternaam
        </td>
        <td>
            <?php
                echo $_GET[fullname];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studentnummer
        </td>
        <td>
            <?php
            echo $_GET[number];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET[date];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET[reason];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leerjaar
        </td>
        <td>
            <?php
            echo $_GET[year];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmelden bij de succesklas
        </td>
        <td>
            <?php
            $succesclass = $_GET[succesclass];
                if($succesclass == true)
                {
                    echo "ja";
                }
                else
                {
                    echo"nee";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Verwijderen gegevens
        </td>
        <td>
            <?php
            $data = $_GET["data"];
                if($data == true)
                {
                    echo "ja";
                }
                else
                {
                    echo"nee";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Overig
        </td>
        <td>
            <?php
            echo $_GET[reasonText];
            ?>
        </td>
    </tr>
</table>