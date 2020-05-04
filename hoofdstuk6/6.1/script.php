<?php
include "../../Includes/header.php";
?>

<?php
include "../../Includes/aside.php";
?>
    <form action="checklogin.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="user">Usename</label>
                </td>
                <td>
                    <input type="text" id="user" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Password</label>
                </td>
                <td>
                    <input type="password" id="pass" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit">
                </td>
                <td>
                </td>
            </tr>
        </table>
<?php
include "../../Includes/footer.php";
?>