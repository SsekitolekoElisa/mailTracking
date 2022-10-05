

<?php
session_start();

if (isset($_SESSION['USERNAME'])){

include "adminNav.php";

?>
<html lang="en">
    <title>add new mails</title>
    <div class="  align-content-center container-fluid  " id="mycontent" style="float: right; margin: 30px; padding: 70px; width: 1250px; ;">
        <!-- Page content -->
        <div class="col-sm-12">
            <div class="card-header">
                <h4>POSTA UGANDA
                </h4>
                <h3>Add Mails</h3>
            </div>
        </div>

        <div>
            <form action="" method="post" class="form-control ">
                <table >
                    <tr>
                        <td>Date :</td>
                        <td><input type="date" name="date" id="date"></td>

                    <tr>
                        <td>Sender :</td><br>
                        <td><input type="text" name="sender" id="sender"></td>
                    </tr>

                    <tr>
                        <td>Recpient :</td><br>
                        <td><input type="text" name="recpient" id="recpient"></td>
                    </tr>

                    <tr>
                        <td>Branch code:</td><br>
                        <td><input type="text" name="branch" id="branch"></td>
                        
                    </tr>
                    <tr>
                        <td>PO BOX :</td><br>
                        <td><input type="text" name="poBox" id="poBox"></td>
                    </tr>
                    <tr>
                        <td>Tellphone Number :</td><br>
                        <td><input type="phone number" name="telnumber" id="TellNo"></td>
                    </tr>



                </table>
                <button type="button" name="reset" value="reset" class="btn btn-danger">RESET</button>
                <button type="submit" name="submit" value="submit" class="btn btn-info">SUBMIT</button>
            </form>
        </div>
        
    </div>

</body>

</html>
<?php 
} else {
    header("location:../index.php");
}
?>