<?php
session_start();

if (isset($_SESSION['USERNAME'])){
    include "adminNav.php";
include 'mail_DB_connect.php';


$retrieve_query = "select fname,lname,gender, email,telnumber,role,username from staff";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>
<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "delete from staff where id =$id");
    header("location:staffRecords.php");
}



if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $retrieve_query = "select fName,lName,gender, email,telnumber,role,username from staff where email= $id";

    $execute_query = mysqli_query($con, $retrieve_query);

    $fetch = mysqli_fetch_assoc($execute_query);

    $username = $fetch['username'];
    $fName = $fetch['fName'];
    $lName = $fetch['lName'];
    $gender = $fetch['gender'];
    $email = $fetch['email'];;
    $telnumber = $fetch['telnumber'];
    $role = $fetch['role'];
    header("location:createUser.php");
}
?>

<?php
//  <div id="main" style=" padding: 90px 20px  0px 60px; " >  

?>
<html lang="en">
<title>Staff Records</title>
<div id="main" style=" padding: 90px 20px  0px 60px; ">
    <!-- Page content -->
    <div class="col-sm-12">
        <div class="card-header">
            <h4>POSTA UGANDA
            </h4>
            <h3>Staff Records</h3>
        </div>
    </div>
    &nbsp;
    &nbsp;

    <table width="75%" align="center" class="table table-striped">
        <tbody>
           
            <tr bgcolor="#1367EA" class="tr">
                <!-- <td>Staff No.</td> -->
                <td class="text-white">User name </td>
                <td class="text-white">First Name </td>
                <td class="text-white">Last Name </td>
                <td class="text-white">Gender</td>
                <td class="text-white">Email Address</td>

                <td class="text-white">Phone Number </td>

                <td class="text-white"> Role</td>
                <!-- <td> Branch Number</td> -->
                <td class="text-white">Edit staff</td>
                <td class="text-white">Remove staff</td>



            </tr>
            <?php

            while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                <tr bgcolor="#d9dbdb">
                    <!-- <td><? // echo $fetch['staffNo']; 
                                ?></td> -->
                    <td><?php echo $fetch['username']; ?></td>
                    <td><?php echo $fetch['fname']; ?></td>
                    <td><?php echo $fetch['lname']; ?></td>
                    <td><?php echo $fetch['gender']; ?></td>
                    <td><?php echo $fetch['email']; ?></td>
                    <td><?php echo $fetch['telnumber']; ?></td>
                    <td><?php echo $fetch['role']; ?></td>
                    <!-- <td><?php //echo $fetch['branchNo']; 
                                ?></td> -->
                    <td> <a href="../admin/createUser.php?edit=<?php echo $fetch['email']; ?>" $$ message=Update><button type="submit" class=" btn_edit text-uppercase text-white text-sm w100 fw-normal btn btn-info btn3-sm" name="edit">Edit</button> </a> </td>
                    <td> <a href="../delete.php?delete=<?php echo $fetch['email']; ?>"> 
                    <button type="submit" class=" btn_delete text-uppercase text-white text-sm w100 fw-normal btn btn-danger btn3-sm" name="delete">delete</button> </a> </td>
                </tr>
            <?php } ?>


    </table>



</div>
<footer class="footer-user">

    <p style="text-align:center; margin-right: 4%; font-size: 14px; margin-top: 6px;">Postal Uganda system © 2022</p>

</footer>
</body>

</html>
<?php 
} else {
    header("location:../index.php");
}

include "user.php";
?>
