<?php
session_start();
include "restDb.php";


if(isset($_POST['saveR'])){
    $Rname= $_POST['Rname'];
    $Rnumber = $_POST['Rnumber'];


    $Rlocation = $_POST['Rlocation'];
    $Rwebsite= $_POST['Rwebsite'];
    $Remail= $_POST['Remail'];



    if(strlen($Rnumber) < 10 ){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>phone number is incorrect</b>
			</div>
		";
        exit();
    }
    if(strlen($Rnumber) < 10 ){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>phone number is incorrect</b>
			</div>
		";
        exit();
    }


    $sql = "INSERT INTO resturant (Rname,Rnumber,Rlocation,Rwebsite,Remail)
values ('$Rname','$Rnumber', '$Rlocation','$Rwebsite','$Remail')";


    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header("refresh:1;url=index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>