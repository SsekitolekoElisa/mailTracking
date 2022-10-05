<?php
session_start();

function check_login($con){

if (isset($_SESSION['USERNAME'])){
   $username = $_SESSION['USERNAME'];
   $query = "select * from users where username ='USERNAME' limit 1";


   $result = mysqli_query($con, $query);

   if($result && mysqli_num_rows( $result ) > 0){
    $USERNAME = mysqli_fetch_assoc($result);
    return $USERNAME;
   }
    
}

 header("location:logIn.php");
 die;
}


