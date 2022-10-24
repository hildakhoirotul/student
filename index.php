<!DOCTYPE html>
<html>

<head>
    <title>Student Data</title>
</head>

<body>

    <h2>STUDENT DATA</h2>
    <br />
    <a href="add.php">Add Student</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Address</th>
            <th>Option</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($connect, "select * from student");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['address']; ?></td>
                <td>
                    <a href="edit.php">EDIT</a>
                    <a href="delete.php">DELETE</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>