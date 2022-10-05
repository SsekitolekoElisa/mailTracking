<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "carrierNav.php";

?>
<?php

include 'mail_DB_connect.php';

include '../time.php';


$retrieve_query = "SELECT client.boxnumber,client.clientNo,client.fname,client.lname,client.telnumber, mail.addedTime 
FROM client inner join mail on client.clientNo=mail.clientNo where deliTimedate is null;";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>



<html lang="en">
<title>Confirm Delivery</title>

<div id="main" style=" padding: 90px 20px  0px 60px; ">
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Staff Records</h3>
            </div>
        </div>
     
        <table class="  table table-bordered">
            <thead bgcolor="#1367EA" class="text-white" >
                <tr class="table-bordered">
                    <td >P.O Box</td>
                    <td >Client Id</td>
                    <td >lname</td>
                    <td >first name</td>
                    <td  >Phone number</td>>
                    <td >Added Time</td>
                    <td >Confirmation</td>
                </tr>
        
            </thead>
            <tbody>


                <!--  -->

                <?php

                while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                    <tr bgcolor="#d9dbdb">
                        <td><?php echo $fetch['boxnumber']; ?></td>
                        <td>CT<?php echo $fetch['clientNo']; ?></td>
                        <td><?php echo $fetch['fname']; ?></td>
                        <td><?php echo $fetch['lname']; ?></td>
                        <td>0<?php echo $fetch['telnumber']; ?></td>
                        <td><?php echo $fetch['addedTime']; ?></td>
                    
                        <td><a href="../time.php?confirm=<?php echo $fetch['clientNo']; ?>"><button type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-success btn3-sm" name="confirm">confirm</button></a> </td>
                    </tr>
                <?php } ?>



            </tbody>


        </table>


</html>
<?php 
} else {
    header("location:../index.php");
}
?>