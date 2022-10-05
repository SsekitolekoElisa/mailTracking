<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>
<?php

include 'mail_DB_connect.php';


$retrieve_query = "select mail.addedTime,mail.clientNo,mail.outTimedate, mail.mail_id, client.boxnumber from mail inner join client on mail.clientNo=client.clientNo where deliTimedate is NULL order by addedTime";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>

<html lang="en">
<title>Undelivered Mails</title>

<div id="main" style=" padding: 90px 20px  0px 60px; ">

    <!-- Page content -->
    <div class="col-sm-12">
        <div class="card-header">
            <h4>POSTA UGANDA
            </h4>
            <h3>Undelivered Mails</h3>
        </div>
    </div>

    <table width="75%" align="center" class="table table-striped table-hover">
        <tbody>

            <tr bgcolor="#1367EA" class="tr">

                <td bgcolor="#1367EA">mail_id </td>
                <td bgcolor="#1367EA">Added Time</td>
                <td bgcolor="#1367EA">Pick up</td>
                <td bgcolor="#1367EA">Client</td>
                <td bgcolor="#1367EA">P.O BOX</td>


            </tr>
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
    <div>

    </div>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>