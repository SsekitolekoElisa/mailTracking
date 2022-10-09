<?php
$_msg ="";
?>
<?php
include "../config.php";
//session_start();

if (isset($_SESSION['USERNAME'])){
   
include "adminNav.php";
;

$retrieve_query1 = "select * from mail where deliTimedate is null";
$retrieve_query2 = "select * from mail where deliTimedate is not null";
$retrieve_query3 = "select * from mail ";
$retrieve_query4 = "select * from staff";


$execute_query1 = mysqli_query($con, $retrieve_query1);
$execute_query2 = mysqli_query($con, $retrieve_query2);
$execute_query3 = mysqli_query($con, $retrieve_query3);
$execute_query4 = mysqli_query($con, $retrieve_query4);
 
$fetch = mysqli_num_rows($execute_query1);

$num1 = mysqli_num_rows($execute_query1);
$num2 = mysqli_num_rows($execute_query2);
$num3 = mysqli_num_rows($execute_query3);
$num4 = mysqli_num_rows($execute_query4);

?>
?>


<html lang="en">
<title>Admin Dashboard</title>

    <div id="main" style=" padding: 90px 20px  0px 60px; "> 
        <!-- Page content -->
        <div class="col-sm-12">
            <div>
                <h4 class="card-header">POSTA UGANDA 
                </h4>
            </div>
        </div>
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(1, 1, 1, 1);">
            <path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"></path></svg>
            <label>Date:<?php  echo date(" d-m-Y"); ?> </label>
</div>
        
        <?php echo  $_msg = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Success <?php echo $_SESSION["USERNAME"];  ?>!</strong> You have successfully Loged In.
  </div>';
   ?> 
      
       
      <div class="insights card-header">
            <div class="new">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);">
                    <path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-4 9h-3v3h-2v-3H8v-2h3V9h2v3h3v2z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3>New Mails</h3>
                        <h1> <?php echo $num1?></h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>33%</p>
                        </div>

                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            <div class="new">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);">
                    <path d="M7 5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H7zm4 10.414-2.707-2.707 1.414-1.414L11 12.586l3.793-3.793 1.414 1.414L11 15.414z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3>Delivered Mails</h3>
                        <h1> <?php echo $num2?></h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>28%</p>
                        </div>

                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            <div class="new">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);">
                    <path d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-4.793 9.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3>Undelivered Mails</h3>
                        <h1> <?php echo $num1?></h1>
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
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);"><path d="M20 4H6c-1.103 0-2 .897-2 2v5h2V8l6.4 4.8a1.001 1.001 0 0 0 1.2 0L20 8v9h-8v2h8c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-7 6.75L6.666 6h12.668L13 10.75z"></path><path d="M2 12h7v2H2zm2 3h6v2H4zm3 3h4v2H7z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3> Delivery in Progress</h3>
                        <h1> <?php echo $num1?></h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>46%</p>
                        </div>
                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
           
            <div class="Completed">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3>ALL MAILS</h3>
                        <h1> <?php echo $num3?></h1>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <p>15%</p>
                        </div>
                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>
            <div class="new">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(250, 245, 245, 1);"><circle cx="6" cy="4" r="2"></circle><path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path><circle cx="17" cy="4" r="2"></circle><path d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z"></path></svg></span>
                <div class="middle">
                    <div class="left">
                        <h3>Staff Present</h3>
                        <h1> <?php echo $num4?></h1>
                    </div>
                    <div class="progress">

                        <div class="number">
                            <p>33%</p>
                        </div>

                    </div>
                </div>
                <small>Last 24 hours</small>
            </div>

    

        </div>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>