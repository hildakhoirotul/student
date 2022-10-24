<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>

    <h2>ADD STUDENT DATA</h2>
    <br />
    <a href="index.php">BACK</a>
    <br />
    <br />
    <h3>Add Student Data</h3>
    <form method="post" action="add_action.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>