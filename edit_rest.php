<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "user";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
$sql="UPDATE  resturant SET Rname='$_POST[Rname]',Rlocation='$_POST[Rlocation]',Rwebsite='$_POST[Rwebsite]',Remail='$_POST[Remail]'WHERE Rnumber='$_POST[Rnumber]'";

If(mysqli_query($con,$sql))
    header("refresh:1;url=index.php");
else
    echo "NOT UPDATED";

// Check connection
//if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
//}

?>
<?php
/**
 * Created by PhpStorm.
 * User: aseel
 * Date: 27/4/2019
 * Time: 12:24 م
 */