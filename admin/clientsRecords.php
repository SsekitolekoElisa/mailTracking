
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>


<?php
include 'mail_DB_connect.php';

$retrieve_query = "select clientNo,boxnumber,fName,lName,gender, email,telnumber from client;";

$execute_query = mysqli_query($con, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);


// //Editing data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $retrieve_query = "select boxnumber, fname, lname, gender, email, telnumber from client where boxnumber= $id";

    $execute_query = mysqli_query($con, $retrieve_query);

    $fetch = mysqli_fetch_assoc($execute_query);

    $pobox = $_POST['pobox'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telnumber = $_POST['telnumber'];
    header("location:admin/addClient.php");
}
?>

<html lang="en">
<title>Client Records</title>
<div id="main" style=" padding: 90px 20px  0px 60px; ">
    <!-- Page content -->

    <div class="card-header col-sm-12">
        <h4>POSTA UGANDA
        </h4>


    </div>

    <table width="100%" align="left" class="table table-striped">
        <tbody>

            <tr bgcolor="#1367EA" class="tr text-white">
                <td class="text-white">ClientNo</td>
                <td class="text-white">P.O BOX</td>

                <td class="text-white">First Name </td>
                <td class="text-white">Last Name </td>
                <td class="text-white">Gender</td>
                <td class="text-white">Email Address</td>
                <td class="text-white">Phone Number </td>
                <td class="text-white">Edit client</td>
                <!-- <td class="text-white">Remove client</td> -->
            </tr>
            <?php

            while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                <tr bgcolor="#d9dbdb">
                    <td>CT<?php echo $fetch['clientNo']; ?></td>
                    <td><?php echo $fetch['boxnumber']; ?></td>

                    <td><?php echo $fetch['fName']; ?></td>
                    <td><?php echo $fetch['lName']; ?></td>
                    <td><?php echo $fetch['gender']; ?></td>
                    <td><?php echo $fetch['email']; ?></td>
                    <td>0<?php echo $fetch['telnumber']; ?></td>
                    <td><a href="../admin/addClient.php?edit=<?php echo $fetch['boxnumber']; ?>"><button type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-info btn3-sm" name="edit">Edit</button></a> </td>
                    <!-- <td><a href="user.php?delete=<>"> -->
                    <!-- //  echo $fetch['telnumber'];  -->
                    <!-- <button type="submit" class="text-uppercase text-white text-sm w100 fw-normal btn btn-danger btn3-sm" name="delete">delete</button> </a></td> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p>&nbsp;</p>
</div>

</html>
<script>
    $(document).ready(function() {
        $('.btn').click(function(e) {
            e.preventDefault();
            var id = $(this).val();

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            //         if(confirm('Do you want to delete this data ?')){
            //             alert(id);
            //             $.ajax({
            //                 url:"" + id,
            //                 success: function(response) {
            //  widow.location.reload();
            //  alert('Data Deleted');
            //                 }
            //             }); 
            //         }
        });
    });
</script>
<?php 
} else {
    header("location:../index.php");
}
?>