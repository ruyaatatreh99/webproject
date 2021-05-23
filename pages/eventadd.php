<?php
session_start();
include "eventdb.php";


if(isset($_POST['saveevent'])){
    $Nameev= $_POST['Nameev'];
    $location = $_POST['location'];


    $dateev = $_POST['dateev'];
    $timeev= $_POST['timeev'];
    $aboutEvent= $_POST['aboutEvent'];



    $sql = "INSERT INTO eventcalender (Nameev,location,dateev,timeev,aboutEvent)
values ('$Nameev','$location', '$dateev','$timeev','$aboutEvent')";


    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header("refresh:1;url=calendar.html");

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>