<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Role</title>
</head>
<body>
    <h1>Edit Role</h1>
    <?php
        include('mysql.php');
        $db = connect();
        $id = $_GET['id'];
        $result = $db->query("SELECT * FROM roles WHERE id = $id");
        $row = $result->fetch();
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row->id ?>"> <br>
        <input type="text" name="name" placeholder="Name" value="<?= $row->name ?>"> <br>
        <input type="text" name="value" placeholder="Value" value="<?= $row->value ?>">  <br>
        <button>Update</button>
    </form>
</body>
</html>