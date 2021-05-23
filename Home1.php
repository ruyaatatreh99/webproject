<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<style>
    body{background-color: black}
    button{ background-color: #111;
    border: none;}
    .sidenav {
        height: 100%; /* Full-height: remove this if you want "auto" height */
        width: 160px; /* Set the width of the sidebar */
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        z-index: 1; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        background-color: #111; /* Black */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
    }

    /* The navigation menu links */
    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
        color: #f1f1f1;
    }

    /* Style page content */
    .main {
        margin-left: 160px; /* Same as the width of the sidebar */
        padding: 0px 10px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }

    button {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }
</style>
</head>
<body>
<div class="sidenav">
    <form action="Home1.php" method="post"><button type="submit" name="show"> Home</button></form>
    <a href="edit.php" >Edit Info.</a>
    <a href="regevent.php">Register in Event</a>
    <a href="logout.php">logout</a>
</div>

<div  class="main">
        <?php
        include("db.php");
        if (isset($_POST['show'])) {
            $list = "SELECT name,location,date  FROM user_event";
            $result = mysqli_query($con, $list);
            if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
?>



<div class="row">

    <div class="col-md-6">
        <table>
            <tr><td>Event Name: </td><td><b><?php echo $row["name"]; ?></b> </td></tr>
    <tr><td>Event Location: </td><td><b><?php echo $row["location"]; ?></b></td></tr>
    <tr><td>Event date: </td><td><b><?php echo $row["date"]; ?></b></td></tr>
            <tr><td><br></td><td><b><br></b></td></tr>
            <tr><td><br></td><td><b><br></b></td></tr>
    </table>
</div>
</div>
<?php
    }

            }
}
        mysqli_close($con);
?>
</div>
</body>
</html>