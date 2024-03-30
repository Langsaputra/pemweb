<?php

    include 'konek.php';

    // show data
    $query = "SELECT * FROM hewan";
    $result = $conn->query($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Makhluk Hidup Hewan</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama Hewan</th>
            <th>Jenis</th>
            <th>Habitat</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['Id'] ?></td>
            <td><?= $row['Hewan'] ?></td>
            <td><?= $row['Jenis'] ?></td>
            <td><?= $row['Habitat'] ?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
   
    </table>
</body>
</html>