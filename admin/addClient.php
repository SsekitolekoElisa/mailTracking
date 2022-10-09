
<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>
<?php

include 'mail_DB_connect.php';


if (isset($_POST['submit'])) {
    $clientNo = "NULL";
    $pobox = $_POST['pobox'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telnumber = $_POST['telnumber'];

   
        $insert_query = "INSERT INTO client (  `clientNo`,`boxnumber`, `fname`, `lname`, `gender`, `email`, `telnumber`) 
    VALUES (  '$clientNo ', '$pobox', '$fname', '$lname', '$gender', '$email', '$telnumber')";
       
       $execute_query = mysqli_query($con, $insert_query);

        if (!$execute_query) {
            // die('Error:' . mysqli_error($con)); 
            echo '<script>window.alert("ERROR ! Account not created");<\script>';
            
        } else {
            echo '
            <script> alert("New Account Has Been Created." );
   <\scritp>';
   header("location:../admin/addClient.php");
        }
    } 



    if(!isset($_GET['edit'])){
        $fetch['boxnumber'] = "";
        $fetch['lname']= "";
         $fetch['fname']= "";
        $fetch['gender']= "";
        $fetch['email']= "";
        $fetch['telnumber']= "";
    }else{
        $id = $_GET['edit'];
        
        $retrieve_query = "select boxnumber ,fname,lname,gender,email,telnumber from client where boxnumber= '$id'";
        $execute_query = mysqli_query($con, $retrieve_query);
        $fetch = mysqli_fetch_assoc($execute_query);
    
        $pobox = $fetch['boxnumber'];
        $lname = $fetch['lname'];
        $fname = $fetch['fname'];
        $gender =$fetch['gender'];
        $email = $fetch['email'];
        $telnumber = $fetch['telnumber'];
    }
    


?>

<html lang="en">
    <title>Add Client</title>
    <div id="main" style=" padding: 90px 20px  0px 60px; " >   
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Add Client</h3>
            </div>
        </div>
        <div>
            <form action="" method="post">
                <table>
                    <tr>

                        <td>P.O BOX Number</td>
                        <td><input type="text" name="pobox" id="pobox" value="<?php echo $fetch['boxnumber']; ?>"></td>
                    <tr>
                        <td>First name :</td>
                        <td><input type="text" name="fname" id="name1" value="<?php echo $fetch['fname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Last name :</td>
                        <td><input type="text" name="lname" id="name2" value="<?php echo $fetch['lname']; ?>"></td>
                    </tr>

                    <tr>

                        <td>Gender :</td>
                        <td>
                            <input type="radio" name="gender" value="M">Male <br>
                            <input type="radio" name="gender" value="F">Female
                        </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" id="EMAIL" value="<?php echo $fetch['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tellphone Number :</td>
                        <td><input type="phone number" name="telnumber" id="TellNo" value="<?php echo $fetch['telnumber']; ?>"></td>
                    </tr>



                </table>
                <button type=" button" name="reset" value="reset" class="btn btn-danger">RESET</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-info">SUBMIT</button>

            </form>
        </div>

    </div>
</html>
<?php 
} else {
    header("location:../index.php");
}
?>
