<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>
<?php

include 'mail_DB_connect.php';



$retrieve_query = "SELECT client.boxnumber,client.clientNo,client.fname,client.lname,client.telnumber, mail.deliTimeDate FROM client inner join mail on client.clientNo=mail.clientNo where deliTimedate is not null;";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
?>

<html lang="en">
    <title>Delivered Mails</title>
<div id="main" style=" padding: 90px 20px  0px 60px; " > 
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Delivered Mails</h3>
            </div>
        </div>
        <div >
        <table width="75%" align="center"  class="table table-bordered table-striped table-hover">
            <thead bgcolor="#1367EA">
                <tr class="table-bordered">
                    <td   bgcolor="#1367EA">P.O Box</td>
                    <td  bgcolor="#1367EA">Client Number</td>
                    <td  bgcolor="#1367EA">First name</td>
                    <td  bgcolor="#1367EA">Last name</td>
                    <td  bgcolor="#1367EA">Phone number</td>
                    <td   bgcolor="#1367EA">Delivery Time</td>
                    <td   bgcolor="#1367EA">Confirmation</td>
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
                        <td><?php echo $fetch['deliTimeDate']; ?></td>
                    
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter ; margin:4px">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                <path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path>
            </svg> </td>
                    </tr>
                <?php } ?>



            </tbody>


        </table>

</body>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>