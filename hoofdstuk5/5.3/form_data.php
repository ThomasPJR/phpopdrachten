<?php
    include('functions.php');
?>

<table id="formData5_3">
    <tr>
        <td>
            <p>Naam: </p>
        </td>
        <td>
            <?php
                echo $_POST['name']
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Leeftijd:
            </p>
        </td>
        <td>
            <?php
                echo $_POST['age']
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Gemeente
            </p>
        </td>
        <td>
            <?php
                echo $_POST['Gemeente']
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Inwoners
            </p>
        </td>
        <td>
            <?php
                echo $_POST['citizens']
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                infected
            </p>
        </td>
        <td>
            <?php
                echo $_POST['infected']
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Kenissen
            </p>
        </td>
        <td>
            <?php
                echo $_POST['kennis']
            ?>
        </td>
    </tr>
    <tr>
        <td style="column-span: 2">
            <p>
                De kans is in realiteit groter om via je eigen netwerk besmet te raken.
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                De kans per ontmoeting op besmetting:
            </p>
        </td>
        <td>
            <?php
                echoKans();
            ?>
        </td>
    </tr>
    <td>
        <p>
            De kans is 1 op:
        </p>
    </td>
    <td>
        <?php
            echo getKans1Op();
        ?>
    </td>
    </tr>
    <tr>
        <td style="column-span: 2">
            <p>
                <?php
                    echo vergelijkOorzaken(getKans1Op());
                ?>
            </p>
        </td>
    </tr>
</table>
