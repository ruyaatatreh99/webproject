<?php
session_start();
include('db.php');
$print="";
if (isset($_POST['login'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password);
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            if($row['email']=="WToPalestine@gmail.com" ){
                header("location:index.php");
            }
            else{

            header("location:profile.php");}
        }
    } else {
      header("location:log.php");
    }

    mysqli_close($con);
}
?>