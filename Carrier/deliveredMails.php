
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "carrierNav.php";

?>
<?php
include 'mail_DB_connect.php';
$retrieve_query = "SELECT client.boxnumber,client.clientNo,client.fname,client.lname,client.telnumber, mail.addedTime FROM client inner join mail on client.clientNo=mail.clientNo where deliTimedate  is not null order by mail.addedTime desc ;";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>

<html lang="en">


    <!-- Page content -->
    <div id="main" style=" padding: 90px 20px  0px 60px; ">
        <!-- Page content -->
        <div class=" container ">
            <div class="col-sm-12">
                <div class="card-header">
                    <h4>Dashboard</h4>
                    <p>Undelivered Mails</p>
                </div>
            </div>
        
        
                <table class="  table table-bordered" width="100%">
                    <thead bgcolor="#1367EA" class="text-white" >
                        <tr class="table-bordered">
                            <td >P.O Box</td>
                            <td >Client Id</td>
                            <td >lname</td>
                            <td >first name</td>
                            <td >Phone number</td>
                            <td>Added Time</td>
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

                                <td> <a href="../time.php?Undo=<?php echo $fetch['clientNo']; ?>"><button type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-danger btn3-sm" name="Undo">Undo</button> </a> </td>
                            </tr>
                        <?php } ?>



                    </tbody>


                </table>

            </div>

   
</html>
<?php 
} else {
    header("location:../index.php");
}
?>