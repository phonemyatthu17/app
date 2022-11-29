<?php
    include('mysql.php');
    $db = connect();
    $result = $db->query("SELECT * FROM roles");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Role List</title>
</head>
<body>
    <h1>Role List</h1>
    <ul>
        <?php while($row = $result->fetch()): ?>
            <li>
                <?= $row->name ?> (<?= $row->value ?>)
                <a href="edit.php?id=<?= $row->id?>">Edit</a>
                <a href="del.php?id=<?= $row->id?>">Del</a>
            </li>
        <?php endwhile ?>
    </ul>
    <a href="new.php">New Role</a>
</body>
</html>