<!DOCTYPE html>
<html lang="en" class="no-js demo-1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jerusalem Restaurants</title>


    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/bookblock.css" />
    <!-- custom demo style -->
    <link rel="stylesheet" type="text/css" href="css/demo2.css" />
    <link rel="stylesheet" type="text/css" href="css/calendar.css" />
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/demo1.css" />


</head>
<body style="background-color: black;">

<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>

<div class="container">

    <div class="codrops-top clearfix">
        <a class="codrops-icon codrops-icon-prev"  style="font-family: 'Book Antiqua';font-weight: bolder ;color: green"><span>Back</span></a>
        <span class="right"><a class="codrops-icon codrops-icon-drop" style="color: green;font-family: 'Book Antiqua';font-weight: bolder" href="index2.html"><span>Next Demo</span></a></span>
    </div>
    <header>
        <h1 style="font-family: 'Kristen ITC';font-weight: bolder;color: forestgreen">Restaurants<span>Cities Of Palestine</span></h1>
        <nav class="codrops-demos" style="font-family: 'Book Antiqua';font-weight: bolder">
            <a  href="index.html">JERUSALEM</a>
            <a href="index2.html">Jaffa</a>
            <a href="index3.html">Bethlehem</a>
            <a href="index4.html">Ramallah</a>
            <a href="index5.html">Nablus</a>
            <a href="index6.html"> Jenin</a>
            <a href="index7.html"> Hebron</a>
            <a href="index8.html"> Acre</a>
            <a class="current-demo" href="RestuFromDB.php">Other Restaurants From Database</a>
        </nav>
    </header>
    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <table border="2px" style="width: 1330px;padding-top: 1px"cellpadding="2px"cellspacing="2px" >
            <ul class="todo-list">
                <tr><div style="padding: 30px">

                        <th style="width: 20%">R_Name</th>
                        <th style="width: 20%">R_phone</th>
                        <th style="width: 20%">R_location</th>
                        <th style="width: 20%">R_website</th>
                        <th style="width: 20%">R_email</th></div></tr>
                <!-- drag handle -->

                <!-- checkbox -->
                <?php
                $conn = mysqli_connect("localhost", "root", "", "user");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT Rname,Rnumber,Rlocation,Rwebsite,Remail FROM resturant";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr style='width: 150%'><td  ><input style='width: 99%' type='text' name='Rname' value='" . $row["Rname"]."'></td><td style='width:75px' ><input style='width: 99%' type='text' name='Rnumber' value='" . $row["Rnumber"]."'></td><td style='width: 75px'><input style='width: 99%' type='text' name='Rlocation' value='" . $row["Rlocation"]."'></td><td style='width:75px'><input style='width: 99%' type='text' name='Rwebsite' value='" . $row["Rwebsite"]."'></td><td style='width:75px'><input style='width: 99%' type='text' name='Remail' value='" . $row["Remail"]."'></td >
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquerypp.custom.js"></script>
<script src="js/jquery.bookblock.js"></script>
<script>
    var Page = (function() {

        var config = {
                $bookBlock : $( '#bb-bookblock' ),
                $navNext : $( '#bb-nav-next' ),
                $navPrev : $( '#bb-nav-prev' ),
                $navFirst : $( '#bb-nav-first' ),
                $navLast : $( '#bb-nav-last' )
            },
            init = function() {
                config.$bookBlock.bookblock( {
                    speed : 800,
                    shadowSides : 0.8,
                    shadowFlip : 0.7
                } );
                initEvents();
            },
            initEvents = function() {

                var $slides = config.$bookBlock.children();

                // add navigation events
                config.$navNext.on( 'click touchstart', function() {
                    config.$bookBlock.bookblock( 'next' );
                    return false;
                } );

                config.$navPrev.on( 'click touchstart', function() {
                    config.$bookBlock.bookblock( 'prev' );
                    return false;
                } );

                config.$navFirst.on( 'click touchstart', function() {
                    config.$bookBlock.bookblock( 'first' );
                    return false;
                } );

                config.$navLast.on( 'click touchstart', function() {
                    config.$bookBlock.bookblock( 'last' );
                    return false;
                } );

                // add swipe events
                $slides.on( {
                    'swipeleft' : function( event ) {
                        config.$bookBlock.bookblock( 'next' );
                        return false;
                    },
                    'swiperight' : function( event ) {
                        config.$bookBlock.bookblock( 'prev' );
                        return false;
                    }
                } );

                // add keyboard events
                $( document ).keydown( function(e) {
                    var keyCode = e.keyCode || e.which,
                        arrow = {
                            left : 37,
                            up : 38,
                            right : 39,
                            down : 40
                        };

                    switch (keyCode) {
                        case arrow.left:
                            config.$bookBlock.bookblock( 'prev' );
                            break;
                        case arrow.right:
                            config.$bookBlock.bookblock( 'next' );
                            break;
                    }
                } );
            };

        return { init : init };

    })();
</script>
<script>
    Page.init();
</script>
</body>
</html>