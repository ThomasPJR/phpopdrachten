<h1>
    Uitschrijf formulier KW1C
</h1>
<hr>
<form method="get" action="uitschrijving.php">
    <table>
        <tr>
            <td>
                <label for="fullname">Voor en achternaam</label>
            </td>
            <td>
                <input type="text" id="fullname" name="fullname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="number">Studentnummer</label>
            </td>
            <td>
                <input type="text" id="number" name="number">
            </td>
        </tr>
        <tr>
            <td>
                <label for="date">Datum</label>
            </td>
            <td>
                <input type="text" id="date" name="date">
            </td>
        </tr>
        <tr>
            <td>
                <label for="reason">Reden van uitschrijven</label>
            </td>
            <td>
                <select id="reason" name="reason">
                    <option value="Verkeerde keuze">Verkeerde keuze</option>
                    <option value="Saai">Saai</option>
                    <option value="Onprettig">Onprettig</option>
                    <option value="Anders">Anders</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="year">Leerjaar</label>
            </td>
            <td>
                <input type = "radio" name = "year" id = "leerjaar1" value = "year1"><label for="year1">Leerjaar 1</label><br>
                <input type = "radio" name = "year" id = "leerjaar1" value = "year2"><label for="year2">Leerjaar 2</label><br>
                <input type = "radio" name = "year" id = "leerjaar1" value = "year3"><label for="year3">Leerjaar 3</label><br>
            </td>
        </tr>
    </table>
    <input type="checkbox" name="succesclass" id="succesclass"><label for="succesclass">Ik wil me aanmelden bij de succesklas</label><br>
    <input type="checkbox" name="data" id="data"><label for="data">Ik wil mijn gegevens verwijderen uit het systeem</label><br>
    <textarea name="reasonText" style="width: 200px; height: 200px;"></textarea>

    <button type="submit">Versturen</button>
</form>