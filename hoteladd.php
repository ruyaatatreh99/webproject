<?php
session_start();
include "hoteldb.php";


if(isset($_POST['save'])){
    $Hname= $_POST['Hname'];
    $Hnumber = $_POST['Hnumber'];


    $Hlocation = $_POST['HLocation'];
    $Hwebsite = $_POST['HWebsite'];
    $Hemail= $_POST['Hemail'];



    if(strlen($Hnumber) < 10 ){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>phone number is incorrect</b>
			</div>
		";
        exit();
    }
    if(strlen($Hnumber) < 10 ){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>phone number is incorrect</b>
			</div>
		";
        exit();
    }


    $sql = "INSERT INTO hotel (Hname,Hnumber ,HLocation,HWebsite,Hemail)
VALUES ('$Hname','$Hnumber', '$Hlocation','$Hwebsite','$Hemail')";


    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header("refresh:1;url=index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>