<?php
session_start();
include('db.php');

if (isset($_POST['Save'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];
    $Npassword = $_POST['Npassword'];
    $Npassword = md5($Npassword);
$password=md5($password);

    $sql = "SELECT * FROM user WHERE email = '$email' and password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $sql1 = "UPDATE user SET password='$Npassword' WHERE email='$email' ";
        echo "hello";
    }

    if ($con->query($sql1) === TRUE) {

        header('Location: profile.php');

    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }

    $con->close();
}
?>
