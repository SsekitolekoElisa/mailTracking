<?php
include 'mail_DB_connect.php';

$retrieve_query = "select*from client";

$execute_query = mysqli_query($connect, $retrieve_query);

$fetch = mysqli_fetch_assoc($execute_query);
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
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CND link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script>
    </script>

</head>

<body class="body">

    <table width="100%" border="1px" align="center">
    
            <tr>
                <td height="20">
                    <table width="75%" align="center" class="table table-striped">
                        <tbody>
                            <h2 align="center">Client's Records</h2>
                            <tr bgcolor="#1367EA" class="tr">
                                <td>Client No.</td>
                                <td>First Name </td>
                                <td>Last Name </td>
                                <td>Phone Number </td>
                                <td> Preference Type</td>
                                <td> Maximum Rent</td>
                                <td>Email Address</td>
                            </tr>
                            <?php

                            while ($fetch = mysqli_fetch_assoc($execute_query)) { ?>
                                <tr bgcolor="#d9dbdb">
                                    <td><?php echo $fetch['clientNo']; ?></td>
                                    <td><?php echo $fetch['fName']; ?></td>
                                    <td><?php echo $fetch['lName']; ?></td>
                                    <td><?php echo $fetch['telNo']; ?></td>
                                    <td><?php echo $fetch['prefType']; ?></td>
                                    <td><?php echo $fetch['maxRent']; ?></td>
                                    <td><?php echo $fetch['email']; ?></td>
                                </tr>
                            <?php } ?>


                    </table>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
            </tr>
        </tbody>
        <tbody>
        </tbody>
    </table>
    <table width="100%" border="1">
        <tbody>
            <tr>
                <td width="1587" height="41" align="center" bgcolor="#dc143c" style="color: #FDF3F3">Copyright &copy; Dream Home Limited 2022. All rights reserved -- Dream Home &trade; </td>
            </tr>
        </tbody>

    </table>

</body>

</html>