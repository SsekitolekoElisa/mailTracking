
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "carrierNav.php";

?>
<?php
include 'mail_DB_connect.php';

$retrieve_query = "select mail.addedTime,mail.clientNo,mail.outTimedate, mail.mail_id, client.boxnumber from mail inner join client on mail.clientNo=client.clientNo where deliTimedate is NULL order by addedTime";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>

<html lang="en">
  <title>Mail to delivery</title>
    <!-- Page content -->
    <div id="main" style=" padding: 90px 20px  0px 60px; ">
        <!-- Page content -->
        <div class=" container ">
            <div class="col-sm-12">
                <div class="card-header">
                    <h4>Dashboard</h4>
                    <p>Mails to deliver</p>
                </div>


            </div>
        </div>
        <table align="center" class="table table-striped table-hover">
            <thead bgcolor="#1367EA" class="text-white">
                <h2 align="center">Mails to be Delivered</h2>
                <tr>

                    <td>mail_id </td>
                    <td>Added Time</td>
                    <td>Pick up</td>
                    <td>Client</td>
                    <td>P.O BOX</td>


                </tr>

            </thead>
            <tbody>
                <?php

                while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                    <tr bgcolor="#d9dbdb">
                        <td><?php echo $fetch['mail_id']; ?></td>
                        <td><?php echo $fetch['addedTime']; ?></td>
                        <td><?php echo $fetch['outTimedate']; ?></td>
                        <td>CT<?php echo $fetch['clientNo']; ?></td>
                        <td><?php echo $fetch['boxnumber']; ?></td>

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