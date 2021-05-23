<?php
session_start();// Starting Session
//if session exit, user nither need to signin nor need to signup
if(isset($_SESSION['login_id'])){
    if (isset($_SESSION['pageStore'])) {
        $pageStore = $_SESSION['pageStore'];
        header("location:". $pageStore); // Redirecting To Profile Page
    }
}
//Register progess start, if user press the signup button

if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    echo "Please fill up all the required field.";
}
else
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    // $hash = password_hash($password,  PASSWORD_BCRYPT);
// Make a connection with MySQL server.
    include('config.php');
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $password = md5($password);
    $sql = "SELECT email from user where email='$email'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $error= "Account already exist";
        header('Location: sign.php');

    } else {
        $sql = "INSERT INTO user (Fname, Lname, email,password)
VALUES ('$Fname', '$Lname', '$email','$password')";


        if ($con->query($sql) === TRUE) {

            header('Location: profile.php');

        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }

}
 ?>