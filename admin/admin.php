
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>


<html lang="en">
<title>Admin Dashboard</title>

    <div id="main" style=" padding: 90px 20px  0px 60px; " > 
        <!-- Page content -->
        <div class="col-sm-12">
            <div>
                <h4 class="card-header">POSTA UGANDA 
                </h4>
            </div>
        </div>
        <div class="data">
            <label>Date:<?php  echo date(" d-m-Y"); ?> </label>
        </div> 
        <div class="insights card-header">
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
            <div class="new">
                <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                <div class="middle">
                    <div class="left">
                        <h3>Delivered Mails</h3>
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
            <div class="new">
                <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                <div class="middle">
                    <div class="left">
                        <h3>Undelivered Mails</h3>
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
            <div class="new">
                <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                <div class="middle">
                    <div class="left">
                        <h3>Mails for Other Branches(REGIONS)</h3>
                        <h6>17</h6>
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
                        <h3> Delivery in Progress</h3>
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
                        <h3>ALL MAILS</h3>
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


        </div>
        <div class=" container table table-hover table-striped " id="mytable">
            <h2>Couriers present Today</h2>
            <table>
                <thead>
                    <tr>
                        <th>Staff Number</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Telphone Number</th>
                        <th>Branch</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Makumbi</td>
                        <td>Gerald</td>
                        <td>775526515</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Victoria</td>
                        <td>Kalungi</td>
                        <td>757104770</td>
                        <td>4</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Sara</td>
                        <td>Ssali</td>
                        <td>776935950</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mukasa</td>
                        <td>Rashid</td>
                        <td>761935919</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>


            <!-- </div> -->
        </div>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>