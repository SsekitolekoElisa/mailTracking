
<?php
 include 'mail_DB_connect.php';
if(isset($_GET['confirm'])){
    $id = $_GET['confirm'];
     $deliTimedate = date("Y-m-d h:i:s");
    

 $insert_query = "update mail set deliTimedate =' $deliTimedate ' WHERE clientNo ='$id'";
        $execute_query = mysqli_query($con, $insert_query);
    header("location:Carrier/confirmDelivery.php");
 } else{
   // echo" <script>alert('Unable to Confirm');</script> ";
 }

 if(isset($_GET['Undo'])){
    $id = $_GET['Undo'];

    $insert_query = "update mail set deliTimedate = null WHERE clientNo ='$id'";
    $execute_query = mysqli_query($con, $insert_query);
header("location:Carrier/deliveredMails.php");
} else{

    //echo" <script>alert('Unable to Undo');</script> ";

}

if(isset($_GET['delete'])){

    

    $id = $_GET['delete'];
    // delete from staff where email ="kemitano@gmail.com";
    $insert_query = "delete from staff  WHERE email ='$id'";
    $execute_query = mysqli_query($con, $insert_query);
header("location:admin/staffRecords.php");
} else{

    //echo" <script>alert('Unable to Undo');</script> ";

}




?>
<script>
    $(document).ready(function() {
        $('.btn_delete').click(function(e) {
            e.preventDefault();
            var id = $(this).val();

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,

                    
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            //         if(confirm('Do you want to delete this data ?')){
            //             alert(id);
            //             $.ajax({
            //                 url:"" + id,
            //                 success: function(response) {
            //  widow.location.reload();
            //  alert('Data Deleted');
            //                 }
            //             }); 
            //         }
        });
    });
</script>