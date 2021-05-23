<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "user";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
$sql="UPDATE  place SET NamePlace='$_POST[NamePlace]',cityName='$_POST[cityName]',DatPlace='$_POST[DatPlace]',infoPlace='$_POST[infoPlace]'WHERE NamePlace='$_POST[NamePlace]'";

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