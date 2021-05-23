<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Palestine</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav  class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div  class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">

            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/admin.PNG "class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/pic-1.PNG" class="user-image" alt="User Image">
              <span class="hidden-xs">Aseel & Ro'ya</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                 Aseel & Ro'ya - Web Developers
                  <small>Members since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->

      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/admin.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Aseel & Ro'ya</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...  :)">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> main Dashboard </a></li>

          </ul>
        </li>



        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="background-color: #333333" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color: white">
        Dashboard
        <small style="color: white">Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li style="color: white"><a href="#"><i style="color: white" class="fa fa-dashboard"></i > <i style="color: white">Home</i></a></li>
        <li style="color: white" class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">


              <p>The touristic cities</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>-->
            <a href="city.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">


              <p>Famous restaurants</p>
            </div>

            <a href="ResturantOfPalestine/BookBlock/index.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">


              <p>Hotels available</p>
            </div>

            <a href="hotel.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">


              <p>New Events</p>
            </div>

            <a href="event.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

<!--*******************************************************************************************************-->
            <div class="box box-primary container" style="background-color:#f56954 ;position: relative ;padding-bottom:300px;width:640px;height:640px">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">To Add And Delete Place</h3>

                    <div class="box-tools pull-right">
                        <ul class="pagination pagination-sm inline">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->

                <div clas="container">
                    <form action="addPlace.php" method="post">
                        <div style="background-color: #f56954 ">
                            <table style="color: white">
                                <tr>
                                    <td>Name Of Place :</td>
                                    <td><input type="text" name="NamePlace" id="name" placeholder="Place Name" style="color: black" required></td>
                                </tr>
                                <tr>
                                    <td>Where It:</td>
                                    <td><input type="text" name="cityName" id="number" placeholder="City"style="color: black" required></td>
                                </tr>
                                <tr>
                                    <td>Date of construction :</td>
                                    <td>
                                        <input type="date" name="DatPlace"id="Location"placeholder="Date"style="width: 155px;color: black" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Information about it:</td>
                                    <td><input type="text" name="infoPlace" id="Website"placeholder="Informational side"style="color: black" required></td>
                                </tr>

                            </table>
                        </div>


                        <!-- /.box-body -->
                        <div style="background-color: #f56954">



                            <table style="padding-bottom: 2px">
                                <tr>
                                    <td>

                                        <div style="float: left; margin-right:10px;background-color:  #f56954 " class="box-footer clearfix no-border">
                                            <button type="submit" class="btn btn-info"style="width:130px"name="saveP">
                                                <i class="fa fa-plus"></i> Add Place</button>
                                        </div></td>


                                </tr>
                            </table>
                        </div>
                    </form>
                    <div class="box-body">
                        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                        <table border="1px" style="color: #0a0a0a;padding-top: 1px" "cellpadding="2px"cellspacing="2px"width="610px">
                            <ul class="todo-list">
                                <tr><div >

                                        <th style="width: 22%">Name Of Place</th>
                                        <th style="width: 22%">Where It</th>
                                        <th style="width: 22%">Date of construction</th>
                                        <th style="width: 22%">information about it</th>

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
                                                echo "<tr><form method='post' action='editPlace.php'><td style='width:24%'><input style='width:99%' type='text' name='NamePlace' value='" . $row["NamePlace"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='cityName' value='" . $row["cityName"]."'></td><td style='width:24%'><input  style='width:99%' type='date' name='DatPlace' value='" . $row["DatPlace"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='infoPlace' value='" . $row["infoPlace"]."'</td>
                                                 <td style='float: left;padding:1px'><div class='tools'>
                           <button style='color: black' class=' fa fa-edit'></button></form><a href=deletePlace.php?NamePlace=".$row["NamePlace"] ."><button class='tools fa fa-trash-o'></button></a></div></td></tr >

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
            </div>
            <!-- /.box -->

            <!--***********#0073b7*************-->
          <div class="box box-primary container" style="background-color: #F39C12;position: relative ;padding-bottom:300px;width:640px;height:640px">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Add And Delete Hotel</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->

              <div clas="container">
              <form action="hoteladd.php" method="post">
              <div style="background-color: #F39C12 ">
              <table style="color: white">
                  <tr>
                      <td>Name :</td>
                      <td><input type="text" name="Hname" id="name" placeholder="Hotel Name" style="color: black" required></td>
                  </tr>
                  <tr>
                      <td>Phone Number:</td>
                      <td><input type="text" name="Hnumber" id="number" placeholder="Hotel Phone"style="color: black" required></td>
                  </tr>
                  <tr>
                      <td>Location :</td>
                      <td>
                          <input type="text" name="HLocation"id="Location"placeholder="Hotel Location"style="color: black" required>
                      </td>
                  </tr>
                  <tr>
                      <td>Website :</td>
                      <td><input type="text" name="HWebsite" id="Website"placeholder="Hotel Website"style="color: black" required></td>
                  </tr>
                  <tr>
                      <td>Email :</td>
                      <td><input type="email" name="Hemail" id="email"placeholder="Hotel Email"style="color: black" required></td>
                  </tr>
              </table>
              </div>


            <!-- /.box-body -->
              <div style="background-color: #F39C12">



           <table style="padding-bottom: 2px">
               <tr>
                   <td>

            <div style="float: left; margin-right:10px;background-color: #F39C12 " class="box-footer clearfix no-border">
              <button type="submit" class="btn btn-info"style="width:130px"name="save">
                <i class="fa fa-plus"></i> Add Hotel</button>
            </div></td>


               </tr>
           </table>
            </div>
              </form>
                  <div class="box-body">
                      <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                      <table border="1px" style="padding-top: 1px"cellpadding="2px"cellspacing="2px"width="610px">
                          <ul class="todo-list">
                              <tr><div >

                                  <th>H_Name</th>
                                  <th>H_phone</th>
                                  <th style="padding: 30px">H_location</th>
                                  <th style="padding: 30px">H_website</th>
                                  <th style="padding: 30px">H_email</th></div></tr>
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
                                      echo "<div><form method='post' action='edit_hotel.php'><td style='width:24%'><input style='width:99%' type='text' name='Hname' value='" . $row["Hname"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='Hnumber' value='" . $row["Hnumber"]."'></td><td style='width:24%'><input  style='width:99%' type='text' name='Hlocation' value='" . $row["Hlocation"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='Hwebsite' value='" . $row["Hwebsite"]."'></td><td style='width:24%'><input style='width:99%' type='text' name='Hemail' value='" . $row["Hemail"]."'><td style='float: left;padding:1px'><div class='tools'>
<button class=' fa fa-edit'></button></form><a href=delete.php?Hnumber=".$row["Hnumber"] ."><button class='tools fa fa-trash-o'></button></a></div></td></tr >
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
          </div>
          <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>


                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>

          <!-- /.box -->


          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">


                    <li class="divider"></li>
                    <li><a href="pages/calendar.html">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box ***************************disblay hotel****************************-->
            <!--***********************#0073b7*-->
            <!--***********#0073b7*************-->
            <div class="box box-primary container" style="background-color: #0073b7;position: relative ;padding-bottom:300px;width:440px;height:500px">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">To Add And Delete Resturants</h3>

                    <div class="box-tools pull-right">
                        <ul class="pagination pagination-sm inline">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->

                <div clas="container">
                    <form action="restAdd.php" method="post">
                        <div style="background-color: #0073b7 ">
                            <table style="color: white">
                                <tr>
                                    <td>Name :</td>
                                    <td><input type="text" name="Rname" id="name" placeholder=" Resturant Name" style="color: black" required></td>
                                </tr>
                                <tr>
                                    <td>Phone Number:</td>
                                    <td><input type="text" name="Rnumber" id="number" placeholder=" Resturant Phone"style="color: black" required></td>
                                </tr>
                                <tr>
                                    <td>Location :</td>
                                    <td>
                                        <input type="text" name="Rlocation"id="Location"placeholder=" Resturant Location"style="color: black" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website :</td>
                                    <td><input type="text" name="Rwebsite" id="Website"placeholder=" Resturant Website"style="color: black" required></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><input type="email" name="Remail" id="email"placeholder=" Resturant Email"style="color: black" required></td>
                                </tr>
                            </table>
                        </div>


                        <!-- /.box-body -->
                        <div style="background-color: #0073b7">



                            <table style="padding-bottom: 2px">
                                <tr>
                                    <td>

                                        <div style="float: left; margin-right:10px;background-color: #0073b7 " class="box-footer clearfix no-border">
                                            <button type="submit" class="btn btn-info"style="width:130px"name="saveR">
                                                <i class="fa fa-plus"></i> Add Resturant</button>
                                        </div></td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    <div class="box-body">
                        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                        <table border="2px" style="padding-top: 1px"cellpadding="2px"cellspacing="2px">
                            <ul class="todo-list">
                                <tr><div style="padding: 30px">

                                        <th>R_Name</th>
                                        <th>R_phone</th>
                                        <th >R_location</th>
                                        <th >R_website</th>
                                        <th >R_email</th></div></tr>
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
                                echo "<div><form method='post' action='edit_rest.php'> <tr style='width: 150%'><td style='width: 75px' ><input style='width: 99%' type='text' name='Rname' value='" . $row["Rname"]."'></td><td style='width:75px' ><input style='width: 99%' type='text' name='Rnumber' value='" . $row["Rnumber"]."'></td><td style='width: 75px'><input style='width: 99%' type='text' name='Rlocation' value='" . $row["Rlocation"]."'></td><td style='width:75px'><input style='width: 99%' type='text' name='Rwebsite' value='" . $row["Rwebsite"]."'></td><td style='width:75px'><input style='width: 99%' type='text' name='Remail' value='" . $row["Remail"]."'><td style='float: left;padding:1px'><div class='tools'>
                                                <button class=' fa fa-edit'></button></form><a href=delete_rest.php?Rnumber=".$row["Rnumber"] ."><button class='tools fa fa-trash-o'></button></a></div></td></tr >
                                ";
                                }
                                echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                        ?>
                                <!-- General tools such as edit or delete-->



                            </ul>
                        </table>
                    </div>
                </div>
            </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) ***********************************************-->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>ىرترىلاورتن</b> رنلاةلرى
    </div>
    <strong>هتاةهنتلهاتفه <a href="https://adminlte.io">رابط</a>.</strong> نتىتلاىللاىللب
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
