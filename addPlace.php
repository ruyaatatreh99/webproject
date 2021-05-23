<?php
session_start();
include "place_db.php";


if(isset($_POST['saveP'])){
    $NamePlace= $_POST['NamePlace'];
    $cityName = $_POST['cityName'];


    $DatPlace = $_POST['DatPlace'];
    $infoPlace = $_POST['infoPlace'];





    $sql = "INSERT INTO place (NamePlace,cityName,DatPlace,infoPlace)
VALUES ('$NamePlace','$cityName', '$DatPlace','$infoPlace')";


    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        header("refresh:1;url=index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>