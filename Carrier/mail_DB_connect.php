<?php

//connecting to mail_deliverydb database.

$con = mysqli_connect("localhost","root","","mail_deliverydb");

if(!$con)
die('Could not connect to database'.mysqli_connect_error());



?>