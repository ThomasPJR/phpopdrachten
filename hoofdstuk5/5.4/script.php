<h3>
    Stoplicht
</h3>
<form method="post">
    <label>
        Komt er een ambulance aan?
    </label>
    <input type="radio" value="yes" name="ambulance" id="ambYes"><label for="ambYes">Ja</label>
    <input type="radio" value="no" name="ambulance" id="ambNo"><label for="ambNo">Nee</label>
    <br>
    <label>
        Stoplicht Kleur?
    </label>
    <input type="radio" value="rood" name="color"><label for="red">Rood</label>
    <input type="radio" value="groen" name="color"><label for="green">Groen</label>
    <input type="radio" value="oranje" name="color"><label for="orange">Oranje</label>
    <br>
    <button type="submit">Verzend</button>
</form>

<h3>
    Wat is de situatie en wat moet ik doen?
</h3>
<p>
    Stoplicht staat op
    <?php
        echo $_POST['color'];
    ?>
     en er komt
    <?php
        if($_POST['ambulance'] == 'yes')
        {
            echo "een";
        }
        else
        {
            echo "geen";
        }
    ?>
     ambulance aan.
</p>


<?php
if(!isset($_POST['ambulance']) || !isset($_POST['color']))
    {
?>
        <p>
            Je hebt een van de twee waardes niet ingevoerd
        </p>
<?php
    }
?>

<?php
    if($_POST['ambulance'] == 'yes' && isset($_POST['color'])|| $_POST['color'] == "rood")
    {
?>
    <p style="color: red">
        U moet stoppen
    </p>
<?php
    }
?>

<?php
    if($_POST['color'] == "oranje" && $_POST['ambulance'] == 'no')
    {
?>
    <p style="color: orange">
        Probeer te stoppen als u kunt, anders rij nog door.
    </p>
<?php
    }
?>

<?php
    if($_POST['color'] == "groen" && $_POST['ambulance'] == 'no')
    {
?>
        <p style="color: green">
            U mag door rijden;
        </p>
<?php
    }
?>