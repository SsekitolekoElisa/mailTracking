<?php
include("mail_DB_connect.php");
function check_login($con){

   $_SESSION["staffNo"] = $_POST("staffNo");

    if(isset($_SESSION['staffNo']))
    {
          $id = $_SESSION['staffNo'];
          $retrieve_query = "select staffNo from staff where staffNo='$id' limit 1";

          $execute_query = mysqli_query($con, $retrieve_query);
          if($execute_query && mysqli_num_rows ($$execute_query) > 0){

            $username = mysqli_fetch_assoc($execute_query);
            return $staffNO;

        }

        //Redirect to login

        header("Location: logIn.php");
        die;

    }
}


 function emptyInputLogin( $username ,$password) {
    //
    if(empty($username) ||empty($password) ){
    $result =true;
    }else{
        $result = false;
     }
 }

 function invalidUsername( $username){
    //$result;
    if(!preg_match("/ ^[a-zA-Z0-9 ]*$ /" ,$username )){
    $result =true;
    }else{
        $result = false;
     }
 }

 
 function userExists( $con,$username ){
  $sql ="select * from staff Where username = ? ;";

  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: admin/createUser.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username  );
 mysqli_stmt_execute($stmt);

 $resultData = mysqli_stmt_get_result($stmt);

 if($row=mysqli_fetch_assoc($resultData)){
   return $row;
   
 }
 else{
    $result = false;
    return $result;
 }mysqli_stmt_close($stmt);

 }


 function loginUser($con,$username ,$password){
         $userExists= userExists( $con,$username );

         if($userExists===false){
            header("location: logIn.php?error=emptyinput");
        exit();
         }

         $password1=$userExists["password"];



         $checkPwd = password_verify( $password, $password1);

         if($checkPwd=== FALSE){
            header("location: logIn.php?error=emptyinput");
        exit();
         }
         elseif($checkPwd=== TRUE){
            session_start();
            $_SESSION['staffNo'] =$userExists["staffNo"];
            $_SESSION['username'] =$userExists["username"];
            header("location: admin/admin.php");
        exit();


         }
 }

?>


