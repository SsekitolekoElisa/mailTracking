

<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "carrierNav.php";

?>
<html lang="en">



    <!-- Page content -->
    <div id="main" style=" padding: 90px 20px  0px 60px; ">
        <!-- Page content -->
        <div class=" container ">
            <div class="col-sm-12">
                <div class="card-header">
                    <h4>Dashboard</h4>
                    <p>Confirm Mail</p>
                </div>


    </div>
       

</html>
<?php 
} else {
    header("location:../index.php");
}
?>