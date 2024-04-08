

<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("zerohunger.c03uhohp3ztg.us-east-1.rds.amazonaws.com", "admin", "Password0123");
$db = mysqli_select_db($connection, 'zerohunger');
?>
