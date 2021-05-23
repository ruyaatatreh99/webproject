<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <?php include('Home1.php') ?>
    <style>
        button{ background-color: #111;
            border: none;}
        input{width: 100%;
        background-color: black;
            color: #818181;
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
        .col-sm-4{
            height: 600px;
        }
        .btn{
            background-color: darksalmon;
        }

    </style>
</head>
<body style="background-color: black">
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<div class="sidenav">
    <form action="Home1.php" method="post"><button type="submit" name="show"> Home</button></form>
    <a href="edit.php" >Edit Info.</a>
    <a href="regevent.php">Register in Event</a>
    <a href="logout.php">logout</a>
</div>

<!-- Page content -->
<?php
include("db.php");
if (isset($_POST['Home'])) {
    $list = "SELECT * FROM user_event";
    $query0 = mysqli_query($con, $list);
    if (mysqli_num_rows($query0) > 0) {
        while ($row = mysqli_fetch_array($query0)) {
        }
        ?>
        <div class="row">

            <div class="col-md-6">
                <table>
                    <tr>
                        <td>Event Name</td>
                        <td><b><?php echo $row["name"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>Event Location</td>
                        <td><b><?php echo $row["location"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>Event Time</td>
                        <td><b><?php echo $row["date"]; ?></b></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <?php
    }
}
?>





<div  class="main">
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <img src="p/e1.png " class='img-resposnive' alt='7th Marthon' >

                <div class="event_details">

                    <div class="event-title event-title1">

                        <Div class='hotel_details'>
                            <form action="Home.php" method="post">
                            <input readonly value="The 7th International Palestine Marathon" name="name1" >
                            <div class="hotel_loc"><p><i class="fa fa-map-marker" aria-hidden="true" ></i> Bethlehem</p></div>
                            <div ><p><i class="fa fa-calendar-alt"   aria-hidden="true"></i> Friday 22nd of March 2019</p></div>
                            <div ><p><i class=" fa fa-clock" aria-hidden="true"></i> 8:30 Am</p></div>
                           <button type="submit" name="event1" class=" btn btn-block mybtn  tx-tfm" value="Register1" >Register</button>
                            </form>
                        </Div>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <img src="p/e2.jpg " class='img-resposnive' alt='7th Marthon' >
                <div class="event_details">
                    <div class="event-title event-title1">

                        <Div class='hotel_details'>
                            <form action="Home.php" method="post">
                            <input readonly value="BETHLEHEM INTERNATIONAL PERFORMING ARTS FESTIVAL" name="name2" >
                            <div class="hotel_loc"><p><i class="fa fa-map-marker" aria-hidden="true" ></i> Bethlehem</p></div>
                            <div ><p><i class="fa fa-calendar-alt" aria-hidden="true"></i>October 5-12 2019</p></div>
                            <div ><p><i class=" fa fa-clock" aria-hidden="true"></i> 10 Am</p></div>

                            <button type="submit" name="event2" class=" btn btn-block mybtn  tx-tfm" >Register</button>
                            </form>
                        </Div>
                    </div>
                </div>
            </div>



            <div class="col-sm-4">
                <img src="p/e4.jpg " class='img-resposnive' alt='7th Marthon' >
                <div class="event_details">
                    <div class="event-title event-title1">

                        <Div class='hotel_details'>
                            <form action="Home.php" method="post">
                            <input readonly value="Jerusalem Nights" name="name3" >
                            <div class="hotel_loc"><p><i class="fa fa-map-marker" aria-hidden="true" ></i> Jerusalem</p></div>
                            <div ><p><i class="fa fa-calendar-alt" aria-hidden="true"></i>	10th October  2019</p></div>
                            <div ><p><i class=" fa fa-clock" aria-hidden="true"></i> 7 pm</p></div>
                            <button type="submit" name="event3" class=" btn btn-block mybtn  tx-tfm"  >Register</button>
                            </form>
                        </Div>
                    </div>
                </div>
            </div>



            <div class="col-sm-4">
                <img src="p/e3.jpg " class='img-resposnive' alt='7th Marthon' >
                <div class="event_details">
                    <div class="event-title event-title1">

                        <Div class='hotel_details'>
                            <form action="Home.php" method="post">
                            <input readonly value="The Annual Olive Harvest Festival" name="name4" >
                            <div class="hotel_loc"><p><i class="fa fa-map-marker" aria-hidden="true" ></i> Bethlehem</p></div>
                            <div ><p><i class="fa fa-calendar-alt" aria-hidden="true"></i>	27th October 2019</p></div>
                            <div ><p><i class=" fa fa-clock" aria-hidden="true"></i> 8 Am</p></div>
                                <button type="submit" name="event4" class=" btn btn-block mybtn  tx-tfm"  >Register</button>
                            </form>
                        </Div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>
