<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>
        body{background-color: black;}
        a,a:hover{color:#6c757d;text-decoration: none;}
        #nav{border-bottom: 1px solid darksalmon}
    </style>

<body >
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>

<div class="container-fluid" id="nav">
    <nav  class="navbar navbar-expand-sm  navbar-dark">

        <a class="navbar-brand" href="Homepage.html"><img src="p/ff.jpg"></a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Homepage.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Aboutus.html">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="conect.html">conect us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop1" data-toggle="dropdown">Event</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="event.html">Event</a>
                    <a class="dropdown-item" href="Trail.html">Trails </a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Places
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">City</a>
                    <a class="dropdown-item" href="hotel.html">Hotel</a>
                    <a class="dropdown-item" href="ResturantOfPalestine/BookBlock/index.html">Resturant</a>
                </div>
            </li>
            <li style="margin-left:800px;border:1px solid white"class="nav-item">
                <a class="nav-link" href="log.html">Login</a>
            </li>

        </ul>
    </nav>
</div>

<div data-vc-full-width="false" data-vc-full-width-init="false" data-vc-stretch-content="true" class="container vc_row wpb_row vc_row-fluid reorder-xs vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">

    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <table border="1px" style="margin-left: -105px;color: white;padding-top: 1px"cellpadding="2px"cellspacing="2px"width="1330px">
            <ul class="todo-list">
                <tr><div >

                        <th style="width: 25%">Name Of Place</th>
                        <th style="width: 25%">Where It</th>
                        <th style="width: 25%">Date of construction</th>
                        <th style="width: 25%">information about it</th>

                        <!-- drag handle -->

                        <!-- checkbox -->
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "user");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT NamePlace,cityName,DatPlace,infoPlace FROM place";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><form method='post' action='editPlace.php'><td style='width:24%'><input style='width:99%' type='text' name='NamePlace' value='" . $row["NamePlace"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='cityName' value='" . $row["cityName"]."'></td><td style='width:24%'><input  style='width:99%' type='text' name='DatPlace' value='" . $row["DatPlace"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='infoPlace' value='" . $row["infoPlace"]."'</td>
</tr >
";
                            }
                            echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                        ?>
                        <!-- Emphasis label -->

                        <!-- General tools such as edit or delete-->


            </ul>
        </table>
    </div>
</div>







</body>
</html>