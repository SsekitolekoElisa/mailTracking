<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap')>
    <!-- html bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- javaSCRIPT bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <!-- sweet alert CND link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
    

      
    function mySideNav() {
        document.getElementById("mySidenav").style.width = "250px";
        
            document.getElementById("main").style.marginLeft = "220px";
}
            

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "220px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
            document.getElementById("main").style.marginLeft =  "0px";
           
        }
    </script>
</head>
<!-- <?php //echo $_SESSION['USERNAME']?> -->
<body background="#000000" onload="mySideNav();">
    <!-- nav bar -->

 

  <header>
        <nav class="navbar fixed-top nav-expand-sm bg-danger fixed-top navColor">
            <div class="container-fluid ">
                <span style="font-size:30px;cursor:pointer" onclick="openNav();">&#9776; Menu</span>
                <ul style="list-style-type: none;padding: 0px;" class="nav-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span class="text-white mx-2"><?php echo $_SESSION["USERNAME"];  ?></span><img src="../images/img_avatar1.png" alt="profile image" style="width: 40px;" class="rounded-pill "></a><span class="glyphicon glyphicon-align-justify"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item glyphicon glyphicon-das " href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path>
                                    </svg>Darshboard</a>

                            </li>
                            <li><a class="dropdown-item  glyphicon glyphicon-log-in" href="Profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter ; margin:4px">
                                        <path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z"></path>
                                    </svg>Profile</a></li>
                            <li><a class="dropdown-item glyphicon glyphicon-user" href="../logOut.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; margin:4px">
                                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                        <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
                                    </svg>Log
                                    out</i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </header>


    <!-- The sidebar -->
    <div class="sidebar" id="mySidenav" class="sidenav">
        <!-- <a class="active" href="#home">Home</a> -->
        <button class=" btn-close  btn-grey"  style=" float:right ;" onclick="closeNav();"></button><span style="font-size: 20px;">close menu</span>
        <a href="admin.php" class="active"> <span style="min-width:30px ;"></span><i class='bx bxs-dashboard'>
            </i> <span style=" margin:4px"> Darshboard</a></span>
        <a href="createUser.php">
            <span><i class='bx bxs-user-account'></i>
            </span> <span style=" margin:4px"> Create user account</a>
        <div class="nav-item Delivery Progressdropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"><span><i class='bx bx-mail-send'></i></span><span style=" margin:4px"> Add new mails</span>
            </a><span class="glyphicon glyphicon-align-justify"></span>
            <ul class="dropdown-menu">
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></span>Kampala Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item " href="" NewMailAdd.php"><span class="text-dark fw-bold"></span>Entebbe Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></i></span>Jinja Branch

                    </a></li>
                <li><a id="drop" class="dropdown-item  " href="NewMailAdd.php"><span class="text-dark fw-bold"></i></span>Gulu Branch

                    </a>
                </li>
                <li><a id="drop" class="dropdown-item " href="NewMailAdd.php"><span class="text-dark fw-bold"></span>Mbarara Branch
                    </a></li>
            </ul>
        </div>
        <a href="addClient.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 255);transform: msFilter ;">
                    <path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path>
                </svg>
            </span> <span style=" margin:4px">Add new CLient</a>
        <a href="clientsRecords.php" role="button"><span></span><i class='bx bxs-contact'></i></span> <span style=" margin:4px">Clients</a>
        <a href="staffRecords.php"><span><i class='bx bxs-user-detail'></span></i> <span style=" margin:4px">Staff</a>
        <div class="nav-item Delivery Progressdropdown">
            <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"><span><i class='bx bxs-package'></i></span> <span style=" margin:4px">Delivery Progress
            </a><span class="glyphicon glyphicon-align-justify"></span>
            <ul class="dropdown-menu">
                <li><a id="drop" class="dropdown-item  " href="deliveredMails.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, );transform: msFilter ; margin:4px">
                                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                <path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path>
                            </svg></span>
                        Delivered
                        mails
                    </a>
                </li>
                <li><a id="drop" class="dropdown-item " href="undeliveredMails.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;">
                                <path d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z">

                                </path>
                                <path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z"></path>
                            </svg></span>
                        Undelivered
                        mail </a></li>
            </ul>
        </div>
        <a href="issuse.php">
            <span><i class='bx bxs-user-account'></i>
            </span> <span style=" margin:4px"> User account Token</a>
        </a>

    </div>



    

    <footer class="footer-user">

        <p style="text-align:center; margin-right: 4%; font-size: 14px; margin-top: 6px;">Postal Uganda system © 2022</p>

    </footer>
</body>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBPSTjYYVBk76ffyZEQmifLVPPPOIv20IY",
    authDomain: "mail-system-fcd86.firebaseapp.com",
    projectId: "mail-system-fcd86",
    storageBucket: "mail-system-fcd86.appspot.com",
    messagingSenderId: "921406321829",
    appId: "1:921406321829:web:7644b56134e737ba62094c",
    measurementId: "G-E1M8N2TSKS"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

</html>
