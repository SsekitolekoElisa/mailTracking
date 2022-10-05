<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "carrierNav.php";

?>

<html lang="en">


<title>Carrier Dashboard</title>

<div id="main" style=" padding: 90px 20px  0px 60px; ">
    <div class=" container ">
        <div class="col-sm-12">
            <div class="card-header">
                <h4>Dashboard</h4>
                <p>username and user Id</p>
            </div>


        </div>
        <div class="insights">
            <div class="new">
                <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                <div class="middle">
                    <div class="left">
                        <h3>New Mails</h3>
                        <h1>17</h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>33%</p>
                        </div>
                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            <!-- End of task -->
            <div class="open">
                <span><i class="fa fa-tasks" aria-hidden="true"></i></span>
                <div class="middle">
                    <div class="left">
                        <h3> Mails to delivered</h3>
                        <h1>21</h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>46%</p>
                        </div>
                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            <!-- End of task -->
            <div class="Completed">
                <span><i class='bx bx-task-x'></i></span>
                <div class="middle">
                    <div class="left">
                        <h3>Undelivered mails</h3>
                        <h1>8</h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>15%</p>
                        </div>
                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            
            <!-- Section: Main chart -->
        </div>
    </div>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>