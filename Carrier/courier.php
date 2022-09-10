<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courier</title>
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- BOX ICON LINK CND -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("mycontent").style.width = "1250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
            document.getElementById("mycontent").style.width = "1500px";
            document.getElementById("mytable").style.center.width = "1500px";
        }
    </script>

</head>

<body>
    <!-- nav bar -->

    <div class="container-fluid">


        <nav class="navbar nav-expand-sm bg-danger fixed-top navColor">
            <div class="container-fluid ">
                <span style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; Menu</span>
                <ul style="list-style-type: none;padding: 0px;" class="nav-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span class="text-white mx-2">Ahimbisibwe Job</span><img src="../images/img_avatar1.png" alt="profile image" style="width: 40px;" class="rounded-pill "></a><span class="glyphicon glyphicon-align-justify"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item glyphicon glyphicon-das " href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path>
                                    </svg>Darshboard</a>

                            </li>
                            <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="Profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter ; margin:4px">
                                        <path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z"></path>
                                    </svg>Profile</a></li>
                            <li><a class="dropdown-item glyphicon glyphicon-user" href="logOut.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                        <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
                                    </svg>Log
                                    out</i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>



    <!-- The sidebar -->
    <div class="sidebar" id="mySidenav" class="sidenav">
        <!-- <a class="active" href="#home">Home</a> -->
        <button class=" btn-close " style="padding-right: 40px;" onclick="closeNav();"></button><span style="font-size: 20px;">close menu</span>
        <a href="courier.php" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(225, 225, 225, 225);transform: msFilter; margin:4px">
                <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path>
            </svg>
            </i>Darshboard

        </a>
        <a href="mailsToDeliver.php"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #FFFFFF ;transform: msFilter; margin:4px">
                <path d="M20 4H6c-1.103 0-2 .897-2 2v5h2V8l6.4 4.8a1.001 1.001 0 0 0 1.2 0L20 8v9h-8v2h8c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-7 6.75L6.666 6h12.668L13 10.75z"></path>
                <path d="M2 12h7v2H2zm2 3h6v2H4zm3 3h4v2H7z"></path>
            </svg>Mails to deliver

        </a>
        <a href="#new mails"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(225, 225, 225, 225);transform: msFilter ; margin:4px">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                <path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path>
            </svg>Confirm Delivery

        </a>
        <a href="#Clients" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(225, 225, 225, 225);transform: msFilter; margin:4px">
                <path d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z">

                </path>
                <path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z">

                </path>
            </svg>Undelivered Mail

        </a>
        <a href="#about"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(225, 225, 225, 225);transform: msFilter; margin:4px">
                <path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path>
                <path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path>
            </svg>Calender
        </a>
        <a class="nav-link " href="#about"></a>
        </ul>


    </div>


    <!-- Page content -->
    <div class="   content align-content-center container  " id="mycontent" style="float: right; margin: 30px; padding: 70px; width: 1250px; background-color:#fff ;">
        <!-- Page content -->
        <div class=" container ">
            <div class="col-sm-9">
                <div class="card-header">
                    <h4>Dashboard</h4>
                    <p>username and  user Id</p>
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


            </div>


        </div>
    </div>
    <footer class="footer-user">

        <p style="text-align:center; margin-right: 4%; font-size: 14px; margin-top: 6px;">Postal Uganda system © 2022</p>

    </footer>
</body>

</html>