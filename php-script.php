<?php

include_once("database.php");
$db = $conn;
define('tableName', 'users');
$userData = $_POST;

registerUser($db, $userData);

function registerUser($db, $userData) {

    $firstName      = $userData['name'];
    $emailAddress   = $userData['email'];
    $password       = $userData['password'];
    $confirmPassword = $userData['confirmPassword'];

    if(!empty($firstName) && !empty($emailAddress) && !empty($password)){

       if($confirmPassword === $password) {
        $query = "INSERT INTO ". tableName;
        $query .= " (name, email, password) ";

        $query .= "VALUES ('$firstName', '$emailAddress', '$password')";
    
        $execute = $db->query($query);
        echo $db->error;
        if($execute) {
        echo "You are registered successfully";
        }
      } else{
        echo "Wrong Confirm password";
      }
   } else {
      echo "All Fields are required";
   }
}