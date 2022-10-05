<!-- javaSCRIPT bootstrap
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// $(document) . ready(function ( ) {
// $('.editbtn').on('click', function() {
// $('#editnodal' ) .modal('show') ;
// $tr = $(this).closest('tr');
// var data = $tr.children("td").map(function(){
// return $(this).text();
// }) .get();
// console. log (data) ;

// • • ) .val(datatø));
// • (data(l));
// • *Iname
// • •course •
// SC *contact ) .

</script>



<script>
    
</script> -->

<!-- <script>
    
<div class="alert alert-success" > 
        <button class="alert-dismissable  btn-close " data-bs-dismiss="alert"></button>
        <strong>Success!</strong> YOU HAVE SUCCESSFULY LOGGED IN.
 // </div>

 </script> -->
<script>
    function alert() {

        var result =
            window.confirm('Are you sure you want to edit this data?');


        if (result == true) {
            <?php
            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $retrieve_query = "select boxnumber, fname, lname, gender, email, telnumber from client where boxnumber= $id";

                $execute_query = mysqli_query($con, $retrieve_query);

                $fetch = mysqli_fetch_assoc($execute_query);
            ?>
                <?php
                $pobox = $_POST['pobox'];
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $telnumber = $_POST['telnumber'];
                ?>
                <?php
                header("location:admin/addClient.php");
                ?>
            <?php      } else {

                header("location:admin/addClient.php");
            } ?>
        }
    }
</script>
