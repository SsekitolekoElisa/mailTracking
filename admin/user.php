<?php

include 'mail_DB_connect.php';
if(isset($_POST['submit']))
{
    $staffNO = "NULL";
    $token="NULL";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telnumber = $_POST['telnumber'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $branchNo = $_POST['branchNo'];

    if ($password == $cpassword = $_POST['cpassword']) {
        $insert_query = "INSERT INTO staff (`staffNO`, `fname`, `lname`, `gender`, `email`, `telnumber`, `role`, `username`, `password`, `branchNo`, `token`) 
    VALUES ('$staffNO', '$fname', '$lname', '$gender', '$email', '$telnumber', '$role', '$username', '$password', '$branchNo','$token' )";
        // $insert_query = "INSERT INTO staff(staffNO, fname, lname, gender, email, telnumber, role, username, password, branchNo)
        //VALUES ('NULL','Kakembo','Martine','M','kakembomartine@gmail.com','0754604928','Courier','Courier@martine20','MartineM','2')";

        $execute_query = mysqli_query($con, $insert_query);

        if (!$execute_query) {
            // die('Error:' . mysqli_error($con)); 
            echo '<script>window.alert("ERROR ! Account not created");<\script>';
        } else {
            echo '
            <script> alert("New Account Has Been Created." );
   <\scritp>' 
   ;
     header("location:../admin/createUser.php");
        }
        
    }else {
        echo '
        <script> alert("Error!.  Password Not Matched." );
<\scritp>' 
        
;
    }
   
}


if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $fname =mysqli_real_escape_string($conn, $_POST['fname']);
    $lname =mysqli_real_escape_string($conn, $_POST['lname']);
    $gender =mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telnumber =mysqli_real_escape_string($conn, $_POST['telnumber']);
    $role =mysqli_real_escape_string($conn, $_POST['role']);
    $username =mysqli_real_escape_string($conn, $_POST['username']);
    // $password =mysqli_real_escape_string($conn, $_POST['password']);
    $branchNo =mysqli_real_escape_string($conn, $_POST['branchNo']);

    mysqli_query($conn, "update staff set $fname='fname',$lname='lname',$gender='gender', $email='email', $telnumber='telnumber',$role='role', $username='username' where id='$id'");
    header("location:../admin/staffRecords.php");
}


//editing Client

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['pobox"']);
    $fname =mysqli_real_escape_string($conn, $_POST['fname']);
    $lname =mysqli_real_escape_string($conn, $_POST['lname']);
    $gender =mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telnumber =mysqli_real_escape_string($conn, $_POST['telnumber']);

    mysqli_query($conn, "update client set $id='boxnumber' $fname='fname',$lname='lname',$gender='gender', $email='email', $telnumber='telnumber' where id='$id'");
    header("location:../admin/clientsRecords.php");
}




?>



