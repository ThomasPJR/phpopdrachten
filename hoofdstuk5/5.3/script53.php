<form method="post" action="form_data.php">
    <table>
        <tr>
            <td>
                <label for="name">Wat is uw naam?</label>
            </td>
            <td>
                <input type="text" id="name" name="name" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="age">Wat is uw leeftijd?</label>
            </td>
            <td>
                <input type="text" id="age" name="age" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gemeente">Gemeente</label>
            </td>
            <td>
                <select name="Gemeente" id="gemeente" required>
                    <option value="Den Bosch">Den Bosch</option>
                    <option value="Eindhoven">Eindhoven</option>
                    <option value="Veldhoven">Veldhoven</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="citizen">Inwoners</label>
            </td>
            <td>
                <input type="text" id="citizen" name="citizens" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="infect">Geinfecteerde</label>
            </td>
            <td>
                <input type="text" id="infect" name="infected" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="kennis">Kent u mensen die besmet zijn in uw omgeving?</label>
            </td>
            <td>
                <input type="radio" name="kennis" id="kennis" value="ja">Ja
                <input type="radio" name="kennis" id="kennis" value="nee">nee
            </td>
        </tr>
    </table>
    <br>
    <button type="submit">Verzend</button>
    <p>
        Zie Corona nieuws hier: <a href="https://www.rivm.nl/actuele-informatie-over-coronavirus" style="text-decoration: none">RIVM info</a>
    </p>
</form>