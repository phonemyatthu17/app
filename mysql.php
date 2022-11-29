<?php

function connect() {
    return new PDO("mysql:dbhost=localhost;dbname=project", "root", "", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ]);
}