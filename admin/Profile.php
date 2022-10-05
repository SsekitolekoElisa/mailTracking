
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <!-- html bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- javaSCRIPT bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<style type="text/css">
a {
  text-decoration : none;
}
</style>

<body background="#000000">
    <!-- nav bar -->

    <div class="container-fluid">


        <nav class="navbar nav-expand-sm bg-danger fixed-top navColor">
            <div class="container-fluid ">
                <a href="admin.php"><span style="font-size:30px;cursor:pointer" >&#9776; Menu</span></a>
                <ul style="list-style-type: none;padding: 0px;" class="nav-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span class="text-white mx-2"><?php echo $_SESSION['USERNAME']?></span><img src="../images/img_avatar1.png" alt="profile image" style="width: 40px;" class="rounded-pill "></a><span class="glyphicon glyphicon-align-justify"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item glyphicon glyphicon-das " href="admin.php"><i class='bx bxs-dashboard'></i>Darshboard</a>

                            </li>
                            <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="Profile.php"><i class='bx bxs-user-detail'></i>Profile</a></li>
                            <li><a class="dropdown-item glyphicon glyphicon-user" href="logOut.php"><i class='bx bx-log-out'>Log
                                        out</i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="  align-content-center container-fluid  " id="mycontent" style="float: right; margin: 30px; padding: 70px; width: 1250px; ;">
        <!-- Page content -->
        <div class="col-sm-12 card-header">
            <div>
                <h4>POSTA UGANDA
                </h4>
            </div>
        </div>
        <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark"> Account Profile</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="Profile.php">Account Profile</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

    <div class="row">
    
    <style>
    .link{
        color:#000;
    }
    </style>



    <div class="col-lg-12">

        <div class="card card-default">
        <div class="card-header border-transparent">
        <h3 class="card-title">Profile Information</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card box_shadow">
              <div class="card-body box-profile" style="border: 1px solid #ced4da;">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="https://www.eposta.ug//public/web/images/profile_icon.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['USERNAME']?></h3>

                <p class="text-muted text-center"></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="">

              <div class="card-body">
                              
                

                    <form action="https://www.eposta.ug/account/profile" class="form-horizontal" method="post" accept-charset="utf-8">
                                  <input type="hidden" name="csrf_test_name" value="9b535679cc53893b4a86f02c22e8cd55" />
                      <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                            <label for="inputName" class="col-sm-4 control-label">First Name:</label>

                            <div class="col-sm-8" style="max-width:100%">
                            <input type="text" class="form-control" name="name" value="Job  Ahimbisibwe" required>
                            </div>
                            <div class="col-lg-6">
                            <label for="inputName" class="col-sm-4 control-label">Last Name:</label>

                            <div class="col-sm-8" style="max-width:100%">
                            <input type="text" class="form-control" name="name" value="Job  Ahimbisibwe" required>
                            </div>

                            </div>
                            <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-4 control-label">Email:</label>

                            <div class="col-sm-8" style="max-width:100%">
                            <input type="text" class="form-control" name="email" value="ahimbisibwejoblee@gmail.com" required>
                            </div>

                            </div>
                        </div>
                        
                      </div>

                      <div class="form-group">
                      <div class="row">
                            <div class="col-lg-6">
                            <label for="inputName2" class="col-sm-4 control-label">Phone:</label>

                            <div class="col-sm-8" style="max-width:100%">
                            <input type="text" class="form-control" name="phone" value="0786514543" required>
                            </div>

                            </div>
                            <div class="col-lg-6">
                            <label for="inputExperience" class="col-sm-4 control-label">Address:</label>

                            <div class="col-sm-8" style="max-width:100%">
                            <input type="text" class="form-control" name="address" value="" required>
                            </div>
                            
                            </div>
                        </div>
                        
                      </div>

                        
                      </div>

                      
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

  
        </div>
    </div>

    </div>


    </div>

</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<style>
    .box_shadow{
        box-shadow:   2px 2px #db0000;
    }
</style>




        
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <!--<footer  style="padding: 7px; background-color: #db0000; text-align: center; color: #ffffff;">

      <div class="float-right d-none d-sm-inline" style="margin-right: 5%;">
          Powered by CiTz Technologies © <?/*=date('Y') */?>
      </div>

  </footer>-->

    <footer class="footer-user">

        <p style="text-align:center; margin-right: 4%; font-size: 14px; margin-top: 6px;">Postal Uganda system © 2022</p>

    </footer>

    <style>
        .footer-user {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #db0000;
            color: white;
            text-align: right;
            height: 35px;
        }




    </style>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<style>
    .main-header-menu{
        background-color: #db0000;
    }
.menu-title{
    color: #ffffff; margin-left: 8px;
}

.menu-title span{
    display: block;
}

</style>
        
    </div>
</body>

</html>

<?php 
} else {
    header("location:../index.php");
}
?>


