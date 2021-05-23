<?php

include('db.php');

if (isset($_POST['Save'])) {


    $email = $_POST['email'];

    $Npassword = $_POST['Npassword'];
    $Npassword = md5($Npassword);


    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $sql1 = "UPDATE user SET password='$Npassword' WHERE email='$email' ";
    }

    if ($con->query($sql1) === TRUE) {

        header('Location: profile.php');

    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }

    $con->close();
}
?>
