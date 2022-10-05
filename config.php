<?php
session_start();


include "mail_DB_connect.php";
if(isset($_POST['login']))

  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $retrieve_query =  "select * from staff where username='$username' and password='$password'";
    $execute_query = mysqli_query($con, $retrieve_query);
    $fetch = mysqli_fetch_assoc($execute_query);
    $row = mysqli_num_rows($execute_query );
   // echo($row);
 if($row>0){
   // var_dump($fetch["role"]);

//     // echo matching user types to there corresponding pages;
       if($fetch['role'] == "Courier"){
        $_SESSION["USERNAME"] = $fetch["username"];
        header("location:Carrier/courier.php?msgsuccess=Login successful");  
       }  else{
          var_dump($fetch);

        $_SESSION["USERNAME" ]= $fetch["username"];
           header("location:admin/admin.php?msgsuccess=Login successful"); 
       }
    }  else
    {

      $_alert ="invalid detaile ,Please try again!!!";
  
     header("Location: index.php?message=Invalid details, Try again!!!");
    
     exit();
    }
   }



?>