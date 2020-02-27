<?php

require_once("config.php");

$db = new mysqli(DB_SERV, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}
