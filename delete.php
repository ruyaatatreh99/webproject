<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "user";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
$sql="DELETE FROM hotel WHERE 	Hnumber='$_GET[Hnumber]'";

If(mysqli_query($con,$sql))
header("refresh:1;url=index.php");
else
    echo "not deleted";

// Check connection
//if (!$con) {
 //   die("Connection failed: " . mysqli_connect_error());
//}

?>
