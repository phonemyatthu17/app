<?php

include('mysql.php');

$db = connect();

$name = $_POST['name'];
$value = $_POST['value'];

$sql = "INSERT INTO roles (name, value) VALUES (:name, :value)";

$statement = $db->prepare($sql);
$statement->execute(["name" => $name, "value" => $value]);

header("location: index.php");