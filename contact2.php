<?php
require "global2.php";

$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$pabs = $_SESSION['username'];
$result = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result3 = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result6 = $mysqli->query("SELECT sum(helps_amount) as helps FROM helps") or die(mysqli_error($mysqli));
$result8 = $mysqli->query("SELECT sum(amount) as pay , sum(refunded_amount) as damn,  sum(amount+amount * 10/100) as amountpay FROM borrows left join avance on borrows.bname=avance.avance_name") or die(mysqli_error($mysqli));
$result7 = $mysqli->query("SELECT sum(saving_amount) as save ,sum(withdrawed_savings) as drains, sum(saving_amount+saving_amount * 5/100) as suminterest FROM savings left join withdraw on withdraw.withdraw_name=savings.sname ") or die(mysqli_error($mysqli));
$result2 = $mysqli->query("SELECT count(firstname) as total,sum(payment) as form  FROM member") or die(mysqli_error($mysqli));
/* pre_r($result); */
if (isset($_SESSION['username'])) {
} else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:37:31 GMT -->

<head>

    <!-- Title -->
    <title>Ndjangi | Extra - Contact</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
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

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
      
        .sidebar{
    position: fixed;
  
}

.page-inner{
    margin-left: 145px;
}
    </style>

</head>

<body class="page-header-fixed">
    <div class="overlay"></div>

    <div class="menu-wrap">
        <nav class="profile-menu">
            <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green" /><span>David Green</span></div>
            <div class="profile-menu-list">
                <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
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
                    <a href="index5.php" class="logo-text"><span>Ndjangi</span></a>
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
                                    <span class="user-name"><?php
                                                            if (isset($_SESSION['username'])) {
                                                                echo $_SESSION['username'];
                                                            }
                                                            ?><i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="uploads/<?php
                                                                                if (isset($_SESSION['username'])) {
                                                                                    echo $_SESSION['username'];
                                                                                }
                                                                                ?>.jpg" width="40" height="40" alt="">
                                </a>
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
                                <img src="uploads/<?php
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
                                        ?><br><small>member</small></span>
                            </div>
                     
                    </div>
                </div>
                <ul class="menu accordion-menu">
                <li class="active"><a href="index5.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span>
                        <p>Dashboard</p>
                    </a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-bitcoin"></span><p>Contribution</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="contribution.php?page=details2000">2000</a></li>
                                <li><a href="contribution.php?page=details5000">5000</a></li>
                            </ul>
                        </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-yen"></span>
                            <p>Other-finances</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="helps5.php">Savings</a></li>
                            <li><a href="borrows5.php">Loans</a></li>
                            <li><a href="savings5.php">Rescues</a></li>

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
                    <li><a href="contact2.php" class="waves-effect waves-button"><span class="icon-book-open"></span>
                        <p>Contact</p>
                    </a></li>

                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Contact</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Extra</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="513" id="gmap_canvas" src="https://maps.google.com/maps?q=Biteng&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:513px;width:1080px;}</style><a href="https://www.embedgooglemap.net">google map location for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:513px;width:1080px;}</style></div></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Contact Info</h2>
                                        <p>We are also members of this Tontine and we hope this app improved the management and smooth running of the Tontine</p>
                                        <h3>Address</h3>
                                        <address>
                                            <strong>Facebook, Inc.</strong><br>
                                            Entree maeture biteng<br>
                                            Yaounde, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> 699027926
                                        </address>
                                        <address>
                                            <strong>Nguemo Aymard</strong><br>
                                            <a href="mailto:#">aymardnguemo1234@gmail.com</a>
                                        </address>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Let's keep in touch</h2>
                                        <p>We thank you for having choosed our app to manage your Ndjangi</p>

                                        <form class="m-t-md" action="mail-process.php" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="Name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4=6" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" name="send" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">2021 &copy; Ndjangi by Groupe SIA.</p>
            </div>
        </div><!-- Page Inner -->
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
    <script src="assets/js/modern.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzjeZ1lORVesmjaaFu0EbYeTw84t1_nek"></script>
    <script src="assets/js/pages/contact.js"></script>

</body>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:37:34 GMT -->

</html>