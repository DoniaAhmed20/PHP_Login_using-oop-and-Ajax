<?php

include_once("database.php");
include_once("user.php");

$db = new Database();
$user = new user($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user->loginUser();
}
?>
