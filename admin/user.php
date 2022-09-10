
<?php
include 'mail_DB_connect.php';
if(isset($_POST['submit']))
{
    $staffNO = "NULL";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telnumber = $_POST['telnumber'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $branchNo = $_POST['branchNo'];


     $insert_query = "INSERT INTO staff (`staffNO`, `fname`, `lname`, `gender`, `email`, `telnumber`, `role`, `username`, `password`, `branchNo`) 
     VALUES ('$staffNO', '$fname', '$lname', '$gender', '$email', '$telnumber', '$role', '$username', '$password', '$branchNo')";



    // $insert_query = "INSERT INTO staff(staffNO, fname, lname, gender, email, telnumber, role, username, password, branchNo)
    //VALUES ('NULL','Kakembo','Martine','M','kakembomartine@gmail.com','0754604928','Courier','Courier@martine20','MartineM','2')";

     $execute_query = mysqli_query($con, $insert_query);

    if (!$execute_query == true) {
        die('Error:' . mysqli_error($con));
       
        
    } else{
        echo "1 record added";
       
    }
       
}
//mysqli_close($con);






 
//    echo $staffNO ;
//    echo $fname;
//    echo $lname;
//    echo $gender;
//    echo $email;
//    echo $telnumber;
//    echo $role;
//    echo $username;
//    echo $password;
//    echo $branchNo;




?>