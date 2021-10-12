<?php
require "global2.php";
$pabs = $_SESSION['username'];
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
if (isset($_GET['case'])) {
    $id = $_GET['case'];
    if ($id == $today) {
    } else {
        header("location:indexVICAF.php");
    }
}

if (isset($_SESSION['username'])) {
} else {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:25:00 GMT -->

<head>

    <!-- Title -->
    <title>Ndjangi | Admin Dashboard</title>


    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="load-more-button.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="load-more-button.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- Styles -->
    <style>
        img.rounded-corners {
  border-radius: 30px;
}
.stats{
 
    font-size: medium;

}
 .panel{
            box-shadow: 25px 25px 25px rgba(0.2, 0.2, 0.2, 0.2);
            border-radius: 10px;
            
}
.col-lg-6{
            top: 120;
            left:250;
          
}
.col-lg-6 .pull{
            
            padding-left: 60px;
}
.sidebar{
    position: fixed;
  
}

.page-inner{
    margin-left: 145px;
}
.loading {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: #3D464D;
  opacity: 0.99;
}
.loading img {
  width: 40px;
  height: 40px;
  position: absolute;
  left: 50%;
  right: 50%;
  bottom: 50%;
  top: 50%;
  margin: -20px;
}

    </style>

</head>

<body class="page-header-fixed">

    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
          
          <div class="slimscroll">
          <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
          <div class="slimscroll chat">
              <div class="chat-item chat-item-left">
                  <div class="chat-image">
                      <img src="admin/<?php
             if (isset($_SESSION['username'])){
                echo $_SESSION['username'];
              }
                 ?>.jpg" alt="">
                  </div>
                  <div class="chat-message">
                      Hi There!
                  </div>
              </div>
              <div class="chat-item chat-item-right">
                  <div class="chat-message">
                      Hi! How are you?
                  </div>
              </div>
              <div class="chat-item chat-item-left">
                  <div class="chat-image">
                      <img src="assets/images/avatar2.png" alt="">
                  </div>
                  <div class="chat-message">
                      Fine! do you like my project?
                  </div>
              </div>
              <div class="chat-item chat-item-right">
                  <div class="chat-message">
                      Yes, It's clean and creative, good job!
                  </div>
              </div>
              <div class="chat-item chat-item-left">
                  <div class="chat-image">
                      <img src="assets/images/avatar2.png" alt="">
                  </div>
                  <div class="chat-message">
                      
                  </div>
              </div>
              <div class="chat-item chat-item-right">
                  <div class="chat-message">
                      Good luck with your sales!
                  </div>
              </div>
          </div>
          <div class="chat-write">
              <form class="form-horizontal" action="javascript:void(0);">
                  <input type="text" class="form-control" placeholder="Say something">
              </form>
          </div>
          </div>
      </nav>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="index.php" class="logo-text"><span>Ndjangi</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <img class="img-circle avatar" src="admin/<?php
                                                                                if (isset($_SESSION['username'])) {
                                                                                    echo $_SESSION['username'];
                                                                                }

                                                                                ?>.jpg" width="50" height="50" alt="">

                                    <span class="user-name"><?php
                                                            if (isset($_SESSION['username'])) {
                                                                echo $_SESSION['username'];
                                                            }
                                                            ?><i class="fa fa-angle-down"></i></span>


                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="Groupchat.php"><i class="fa fa-comments"></i>Chat</a></li>
                                    <li role="presentation"><a href="signout.php"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="signout.php" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                       
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">

                        <div class="sidebar-profile-image">
                            <img src="admin/<?php
                                            if (isset($_SESSION['username'])) {
                                                echo $_SESSION['username'];
                                            }

                                            ?>.jpg" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span><?php
                                    if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];
                                    }

                                    ?> <br><small><?php
                                    $result91 = $mysqli->query("SELECT job from admin  where username='".$pabs."'") or die(mysqli_error($mysqli));
                                    while ($row = $result91->fetch_assoc()) :
                                    ?>
                                    <?php echo $row['job'] ?>
                                    <?php endwhile;?></small></span>
                        </div>

                    </div>
                </div>
                <ul class="menu accordion-menu">

                    <li class="active"><a href="indexVICAF.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span>
                            <p>Dashboard</p>
                        </a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-bitcoin"></span>
                            <p>Contribution</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="cotisation.php?page=contribute2000">2000</a></li>
                            <li><a href="cotisation.php?page=high">5000</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-yen"></span>
                            <p>Other-finances</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="helps.php">Savings</a></li>
                            <li><a href="borrows.php">Loans</a></li>
                            <li><a href="savings.php">Rescues</a></li>

                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="icon-book-open"></span>
                            <p>View Report</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="comment.php">Last_session_Report</a></li>
                            <li><a href="comment2.php">This_session_Report</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-phone-alt"></span>
                            <p>Contact</p>
                        </a></li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Dashboard/Status</h3>
            </div>
        
            <div class="col-lg-6 col-md-3">
          
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <?php
                        include("connection.php");
                        if (isset($_GET['view'])) {
                            $id = $_GET['view'];
                            $result=$mysqli->query ("select images,firstname, lastname,  contribution_amount, contribution_payment, contribution_benefit from member inner join contribution on contribution_id=member_id  where member_id=$id");
                            $result1=$mysqli->query ("select  sum(saving_amount) as saving_amount from savings inner join member on member.firstname=savings.sname where member_id=$id");
                            $result2=$mysqli->query ("select  grant_amount from grantres inner join member on member.firstname=grantres.grantname where member_id=$id");
                            $result3=$mysqli->query ("select  amount from borrows inner join member on member.firstname=borrows.bname where member_id=$id");
                            
                            $_SESSION['message'] = "View success!";
                            $_SESSION['msg_type'] = "success";
                           
                         while($data=$result->fetch_assoc()):
                        ?>
                            <div class="row">
                                <div class="col-lg-3">
                                
                                 <img src="<?php echo $data['images']?>" width="150px" class="rounded-corners" height="150px"><br>
                                </div>
                               
                                
                                <div class="col-lg-4">
                                <div class="pull">
                                <div class="stats">
                        <?php
                                echo "<strong>". $data['firstname']. " " . $data['lastname']."</strong><br><br>";
                               
                               
                                ?>
                                 </div>
                                <?php
                                 
                                echo "Tontine: " .  $data['contribution_amount'] . "<br><br>";
                              
                                echo "Contribution_Benefit:".$data['contribution_benefit']."<br><br>";
                         endwhile;
                         while($data=$result1->fetch_assoc()):
                                echo "Savings: " . $data['saving_amount'] . "<br><br>";
                         endwhile;
                         while($data=$result3->fetch_assoc()):
                                echo "Loans: " .  $data['amount'] . "<br><br>";
                         endwhile;
                         while($data=$result2->fetch_assoc()):
                                echo "Granted_Rescues: " . $data['grant_amount'] . "<br><br>";
                         endwhile;
                                $_SESSION['message'] = "View success!";
                                $_SESSION['msg_type'] = "success";
                        }
                        ?>
                                </div> 
                                </div>
                                </div>
                    </div>
                 
                </div>
            </div>
                   
        </div><!-- Page Inner -->
        <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
    </main><!-- Page Content -->
    <nav class="cd-nav-container" id="cd-nav">
        <header>
            <h3>Navigation</h3>
            <a href="#0" class="cd-close-nav">Close</a>
        </header>
        <ul class="cd-nav list-unstyled">
            <li class="cd-selected" data-menu="index">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-home"></i>
                    </span>
                    <p>Dashboard</p>
                </a>
            </li>
            <li data-menu="profile">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <p>Profile</p>
                </a>
            </li>
            <li data-menu="inbox">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <p>Mailbox</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-tasks"></i>
                    </span>
                    <p>Tasks</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-cog"></i>
                    </span>
                    <p>Settings</p>
                </a>
            </li>
            <li data-menu="calendar">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="cd-overlay"></div>


    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/pace-master/pace.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="assets/plugins/waves/waves.min.js"></script>
    <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
    <script src="assets/plugins/toastr/toastr.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/curvedlines/curvedLines.js"></script>
    <script src="assets/plugins/metrojs/MetroJs.min.js"></script>
    <script src="assets/js/modern.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
    <script src="js/plugins.js"></script>

    <!-- ================================================
Bootstrap Select
================================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>

    <!-- ================================================
Bootstrap Toggle
================================================ -->
    <script src="js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
    <!-- main file -->
    <script src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <!-- bootstrap file -->
    <script src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!-- ================================================
Summernote
================================================ -->
    <script src="js/summernote/summernote.min.js"></script>

    <!-- ================================================
Flot Chart
================================================ -->
    <!-- main file -->
    <script src="js/flot-chart/flot-chart.js"></script>
    <!-- time.js -->
    <script src="js/flot-chart/flot-chart-time.js"></script>
    <!-- stack.js -->
    <script src="js/flot-chart/flot-chart-stack.js"></script>
    <!-- pie.js -->
    <script src="js/flot-chart/flot-chart-pie.js"></script>
    <!-- demo codes -->
    <script src="js/flot-chart/flot-chart-plugin.js"></script>

    <!-- ================================================
Chartist
================================================ -->
    <!-- main file -->
    <script src="js/chartist/chartist.js"></script>
    <!-- demo codes -->
    <script src="js/chartist/chartist-plugin.js"></script>

    <!-- ================================================
Easy Pie Chart
================================================ -->
    <!-- main file -->
    <script src="js/easypiechart/easypiechart.js"></script>
    <!-- demo codes -->
    <script src="js/easypiechart/easypiechart-plugin.js"></script>

    <!-- ================================================
Rickshaw
================================================ -->
    <!-- d3 -->
    <script src="js/rickshaw/d3.v3.js"></script>
    <!-- main file -->
    <script src="js/rickshaw/rickshaw.js"></script>
    <!-- demo codes -->
    <script src="js/rickshaw/rickshaw-plugin.js"></script>

    <!-- ================================================
Data Tables
================================================ -->
    <script src="js/datatables/datatables.min.js"></script>

    <!-- ================================================
Sweet Alert
================================================ -->
    <script src="js/sweet-alert/sweet-alert.min.js"></script>

    <!-- ================================================
Kode Alert
================================================ -->
    <script src="js/kode-alert/main.js"></script>

    <!-- ================================================
jQuery UI
================================================ -->
    <script src="js/jquery-ui/jquery-ui.min.js"></script>

    <!-- ================================================
Moment.js
================================================ -->
    <script src="js/moment/moment.min.js"></script>

    <!-- ================================================
Full Calendar
================================================ -->
    <script src="js/full-calendar/fullcalendar.js"></script>

    <!-- ================================================
Bootstrap Date Range Picker
================================================ -->
    <script src="js/date-range-picker/daterangepicker.js"></script>

    <!-- ================================================
Below codes are only for index widgets
================================================ -->
    <!-- Today Sales -->
    <script>
        // set up our data series with 50 random data points

        var seriesData = [
            [],
            [],
            []
        ];
        var random = new Rickshaw.Fixtures.RandomData(20);

        for (var i = 0; i < 110; i++) {
            random.addData(seriesData);
        }

        // instantiate our graph!

        var graph = new Rickshaw.Graph({
            element: document.getElementById("todaysales"),
            renderer: 'bar',
            series: [{
                color: "#33577B",
                data: seriesData[0],
                name: 'Photodune'
            }, {
                color: "#77BBFF",
                data: seriesData[1],
                name: 'Themeforest'
            }, {
                color: "#C1E0FF",
                data: seriesData[2],
                name: 'Codecanyon'
            }]
        });

        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
                var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
                var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                return content;
            }
        });
    </script>

    <!-- Today Activity -->
    <script>
        // set up our data series with 50 random data points

        var seriesData = [
            [],
            [],
            []
        ];
        var random = new Rickshaw.Fixtures.RandomData(20);

        for (var i = 0; i < 50; i++) {
            random.addData(seriesData);
        }

        // instantiate our graph!

        var graph = new Rickshaw.Graph({
            element: document.getElementById("todayactivity"),
            renderer: 'area',
            series: [{
                color: "#9A80B9",
                data: seriesData[0],
                name: 'London'
            }, {
                color: "#CDC0DC",
                data: seriesData[1],
                name: 'Tokyo'
            }]
        });

        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
                var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
                var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                return content;
            }
        });
    </script>

</body>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:25:59 GMT -->

</html>