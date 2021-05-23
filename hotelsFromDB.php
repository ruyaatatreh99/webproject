<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <style> body{background-color: black;color:white;}
    a,a:hover{color:#6c757d;text-decoration: none;}
    .btn,.btn:hover{color:darksalmon ;border:1px solid darksalmon }
    .btn:hover{background-color:darksalmon;color:white; }
    #nav{border-bottom: 1px solid darksalmon}</style>
</head>
<body>
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script>

</script>

<div class="container-fluid" id="nav">
    <nav  class="navbar navbar-expand-sm  navbar-dark">

        <a class="navbar-brand" href="Homepage.html"> <img src="p/ff.jpg"></a>

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
                    <a class="dropdown-item" href="event.html">Trails </a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Places
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="city.html">City</a>
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
<div class="container-fluid internal_body">
    <div class="col-md-8 col-sm-7 col-xs-12 int_right_div">
        <div class="row">
            <div class="btn-group" style="margin: 30px">
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href="hotel.html"><button class='btn city_btn ' id='hotel20'>Bethlehem Hotels</button></a></div>
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href='http://www.palestinehotels.com/aha/hotels/9-hotels/53-jerusale' target='_blank'>
                    <button class='btn city_btn ' id='hotel21'>Jerusalem Hotels</button></a></div>
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href="n.html" ><button class='btn city_btn' id='hotel51'>Nablus Hotels</button></a></div>
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href="h.html"><button class='btn city_btn' id='hotel52'>Hebron Hotels</button></a></div>
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href="r.html"><button class='btn city_btn' id='hotel53'>Ramallah Hotels</button></a></div>
                <div class='col-md-3 col-sm-4 col-xs-6 margin-bottom-5'><a href="j.html"><button class='btn city_btn' id='hotel54'>Jericho Hotels</button></a></div>

            </div>
        </div>
    </div>
</div>


<div class="box-body">
    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
    <table border="1px" style="padding-top: 1px"cellpadding="2px"cellspacing="2px"width="1300px">
        <ul class="todo-list">
            <tr><div >

                    <th width="20%">Hotel Name</th>
                    <th width="20%">Hotel phone</th>
                    <th width="20%">Hotel location</th>
                    <th width="20%">Hotel website</th>
                    <th width="20%">Hotel email</th></div></tr>
            <!-- drag handle -->

            <!-- checkbox -->
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT Hname,Hnumber,Hlocation,Hwebsite,Hemail FROM hotel";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td ><input style='width:99%' type='text' name='Hname' value='" . $row["Hname"]."'></td><td ><input style='width:99%' type='text' name='Hnumber' value='" . $row["Hnumber"]."'></td><td ><input  style='width:99%' type='text' name='Hlocation' value='" . $row["Hlocation"]."'></td><td ><input style='width:99%' type='text' name='Hwebsite' value='" . $row["Hwebsite"]."'></td><td ><input style='width:99%' type='text' name='Hemail' value='" . $row["Hemail"]."'></td>
</div></td></tr >
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

</body>
</html>