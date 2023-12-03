<?php

include_once("database.php");
session_start();
class user {
   private $db;

   public function __construct(Database $db) {  
              
      // connecting to database  
      $this->db = $db;
  }  
  public function loginUser() {
   // echo 'hi';

    $emailAddress   = $_POST['email'];
    $password       = $_POST['password'];
   
   //  echo $emailAddress;
    if(!empty($emailAddress) && !empty($password)){

        
      //   $query = "SELECT email, password FROM users";
      //   $query .= " WHERE email = '$emailAddress' AND password = '$password'";
        $query = "select email, password FROM users WHERE email='$emailAddress' AND password='$password'";
        
        //$result = $this->db->query($query);
      //   $log_query_run = mysqli_query($this->db->conn, $query);  
      //       $user_data = mysqli_fetch_array($log_query_run);
      //       $no_rows = mysqli_num_rows($log_query_run);
      //   if($no_rows == 1) {
         $result = $this->db->conn->query($query);
        if($result->num_rows > 0) {
         echo 'success';

           $_SESSION['userId'] = $emailAddress;
         //   echo $_SESSION['userId'];
         //   header('location:dashboard.php');
         // echo "success";
        } else {
            echo "Wrong email and password";
        }
     
   } else {
      echo "All Fields are required";
   }
}



//Delete User
public function deleteUser(){
   if(isset($_GET['deleteId'])){
       $id=$_GET['deleteId'];
       $result =$db->delete($id);
        var_dump($result);
   if($result){
     $_SESSION['delete'] = "Deleted Successfully";
      header('location:show.php');
   }
   else{ 
       die ( mysqli_connect_error());
   }
   
    }
   
}
}
// $obj = new user();
// $obj->loginUser();

// define('tableName', 'users');
// $userData = $_POST;

// loginUser($db, $userData);

// function loginUser() {

//     $emailAddress   = $userData['email'];
//     $password       = $userData['password'];
   

//     if(!empty($emailAddress) && !empty($password)){

        
//         $query = "SELECT email, password FROM ".tableName;
//         $query .= " WHERE email = '$emailAddress' AND password = '$password'";
//         $result = $db->query($query);
//         if($result->num_rows > 0) {
//            session_start();
//            $_SESSION['userId'] = $emailAddress;
//            echo "success";
//         } else {
//             echo "Wrong email and password";
//         }
     
//    } else {
//       echo "All Fields are required";
//    }
// }