<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";


include "mail_DB_connect.php";

if( !isset($_GET['edit']))
{
    $fetch['fname'] = "";
    $fetch['lname']= "";
   $fetch['gender']= "";
   $fetch['email']= "";
   $fetch['telnumber']= "";
    $fetch['role']= "";
 $fetch['username']= "";
    $fetch['password']= "";
  $fetch['branchNo']= "";

}else{
    $id = $_GET['edit'];
    
    $retrieve_query = "select fname,lname,gender,email,telnumber,role,username,password,branchNo from staff where email= '$id'";
    $execute_query = mysqli_query($con, $retrieve_query);
    $fetch = mysqli_fetch_assoc($execute_query);

    $fname = $fetch['fname'];
    $lname = $fetch['lname'];
    $gender = $fetch['gender'];
    $email = $fetch['email'];
    $telnumber = $fetch['telnumber'];
    $role = $fetch['role'];
    $username = $fetch['username'];
    $password = $fetch['password'];
    $branchNo = $fetch['branchNo'];
}

?>

<html lang="en">
    <title>Create User</title>
    <div id="main" style=" padding: 90px 20px  0px 60px; " >  
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Add User</h3>
            </div>
        </div>
        <div>
            <form action="user.php" method="post" class="form-control form-control-sm|form-control-lg">
                <table>
                    <tr>
                        <td>
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
                            <input type="radio" name="gender" value="M" value="<?php echo $fetch['gender']; ?>">Male <br>
                            <input type="radio" name="gender" value="F"- value="<?php echo $fetch['gender']; ?>">Female
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
                    <tr>
                        <td>Role:</td>
                        <td><input type="radio" name="role" value="Admin" value="<?php echo $fetch['role']; ?>">Adminstrater <br>
                            <input type="radio" name="role" value="Carrier" value="<?php echo $fetch['role']; ?>">Carrier
                        </td>
                        <!-- <td><input type="text" name="role" id="ROLE" default></td> -->
                    </tr>

                    </tr>
                    </td>



                    <td>
                        <tr>
                            <td>Username :</td>
                            <td>
                                <input type="text" name="username" id="user" placeholder="role@job80" value="<?php echo $fetch['username']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Password :</td>
                            <td>
                                <input type="password" name="password" id="password" placeholder="password" required value="<?php echo $fetch['password']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td> Confirm Password :</td>
                            <td>
                                <input type="password" name="cpassword" id="cpassword" placeholder="comfirm password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Branch Code:</td>
                            <td>
                                <select name="branchNo" id="code" required value="<?php echo $fetch['branchNo']; ?>">
                                    <option>--SELECT BRANCH</option>
                                    <option name="branchNo" value="4">Kampala</option>
                                    <option name="branchNo" value="1">Entebbe</option>
                                    <option name="branchNo" value="3">Jinja</option>
                                    <option name="branchNo" value="5">Mbarara</option>
                                    <option name="branchNo" value="2">Gulu</option>
                                </select>

                            </td>
                        </tr>
                    </td>
                    </tr>



                </table>
                <button type="button" name="reset" value="reset" class="btn btn-danger">RESET</button>
                <button type="submit" name="submit" value="submit" class="btn btn-info">SUBMIT</button>
            </form>
        </div>

</html>


<?php 
} else {
    header("location:../index.php");
}
?>
