<?php
session_start();
$userId = $_SESSION['userId'];

include_once("database.php");
$db = $conn;

define('tableName', 'users');

if(!$userId){
  header("location:index.php");
}

function getUserbyId(){
    
    global $db;
    $userId = $_SESSION['userId'];
    $data = [];

    $query = "SELECT name FROM ".tableName;
    $query .= " WHERE email = '$userId'";

    $result = $db->query($query);
    
    if($result->num_rows > 0) {
      $data = $result->fetch_assoc(); 
    } else {
       header("location:index.php");
    }

    return $data;
}

// session_start();
// $userId = $_SESSION['userId'];

// include_once("database.php");
// $db = $conn;

// define('tableName', 'users');

// if(!$userId){
//   header("location:index.php");
// }

// function getUserbyId(){
    
//     global $db;
//     $userId = $_SESSION['userId'];
//     $data = [];

//     $query = "SELECT name FROM ".tableName;
//     $query .= " WHERE email = '$userId'";

//     $result = $db->query($query);
    
//     if($result->num_rows > 0) {
//       $data = $result->fetch_assoc(); 
//     } else {
//        header("location:index.php");
//     }

//     return $data;
//}