<?php
require "global2.php";
$now = date("Y-m-d");
$pabs = $_SESSION['username'];
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result20 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result21 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result22 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result23 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result44 = $mysqli->query("SELECT  firstname, lastname FROM member inner join benefiter on member.member_id=benefiter.benefiter_id where contribution = 7000 and benefiter = '$now'") or die(mysqli_error($mysqli));
$result43 = $mysqli->query("SELECT  firstname, lastname FROM member inner join benefiter on member.member_id -1=benefiter.benefiter_id where contribution = 5000 and benefiter='$now'") or die(mysqli_error($mysqli));
$result42 = $mysqli->query("SELECT  firstname, lastname FROM member inner join beneficiary on member.member_id=beneficiary.benefit_id where contribution = 2000 and beneficiary='$now'") or die(mysqli_error($mysqli));
$result24 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT  member_id, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
// $result2 = $mysqli->query("SELECT count(firstname) as total, sum(refunded_amount) as Dams, sum(amount+amount * 10/100) as amountpay,sum(payment) as form, sum(amount) as pay,sum(saving_amount) as save,sum(helps_amount) as helps FROM savings right join borrows on borrows.bname=savings.sname right join helps on borrows.bname=helps.hname left join member on savings.sname=member.firstname left join avance on avance.avance_name=member.firstname") or die(mysqli_error($mysqli));
$result4 = $mysqli->query("SELECT  sum(contribution_payment) as form  FROM Contribution left join beneficiary on beneficiary.benefit_id = Contribution.contribution_id where  contribution_payment = 2000 ") or die(mysqli_error($mysqli));
$result5 = $mysqli->query("SELECT  sum(contribution_payment) as formal  FROM Contribution left join beneficiary on beneficiary.benefit_id = Contribution.contribution_id where  contribution_payment = 5000 ") or die(mysqli_error($mysqli));
$result9 = $mysqli->query("SELECT  sum(contribution_payment) as former  FROM Contribution left join beneficiary on beneficiary.benefit_id = Contribution.contribution_id where  contribution_payment = 7000 ") or die(mysqli_error($mysqli));
$today = date("Y-m-d");

$next = date('Y-m-d', strtotime($today . ' + 190 days'));
if (isset($_GET['case'])) {
    $id = $_GET['case'];
    if ($id >= $today) {
    } else {
        header("location:contributionVICAD.php");
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

    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <style>
        #box {
            width: fit-content;
            height: fit-content;
            overflow: hidden;
            background: whitesmoke;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            padding: 10px;
            text-align: center;
            display: none;
        }

        .contactForm {
            width: 100%;
            padding: 40px;
            background: #fff;
        }

        .contactForm h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
        }

        .contactForm .inputBox {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }

        .contactForm .inputBox input,
        .contactForm .inputBox textarea {
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            border: none;
            margin: 10px 0;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
        }

        .contactForm .inputBox span {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }

        .contactForm .inputBox input:focus~span,
        .contactForm .inputBox input:valid~span,
        .contactForm .inputBox textarea:focus~span,
        .contactForm .inputBox textarea:valid~span {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-20px);
        }

        .contactForm .inputBox input[type="submit"] {
            width: 100px;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }

        .logo {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .img {
            border-radius: 15%;
        }

        @media (max-width: 991px) {
            .contact {
                padding: 50px;
            }

            .container {
                flex-direction: column;
            }

            .container .contactInfo {
                margin-bottom: 40px;
            }

            .container .contactInfo,
            .contactForm {
                width: 100%;
            }
        }

        @media print {
            .print {
                display: none;
                visibility: none;
                margin-top: 10px;
                width: 100px;
                height: 30px;
                border-radius: 10px;
                font-size: 20px;
                background-color: blue;
            }
        }
      
        img {
            width: 30%;
            height: 30%;
        }
        .sidebar{
    position: fixed;
  
}

.page-inner{
    margin-left: 145px;
}
        .panel {
            box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.2);
            border-radius: 5%;
        }
    </style>
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

</head>

<body class="page-header-fixed">
    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
        <div class="slimscroll">
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        </div>
    </nav>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
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
                    Thanks, I tried!
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
                    <a href="indexVICAF.html" class="logo-text"><span>Ndjangi</span></a>
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

                                                                                ?>.jpg" width="40" height="40" alt="">
                                    <span class="user-name"><?php
                                                            if (isset($_SESSION['username'])) {
                                                                echo $_SESSION['username'];
                                                            }

                                                            ?> <i class="fa fa-angle-down"></i></span>

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
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-bitcoin"></span><p>Contribution</p><span class="arrow"></span></a>
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
                <h3>Dashboard</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index5.php">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">

                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Contributions</h4>
                        </div>
                        <!-- <?php
                        while ($row = $result42->fetch_assoc()) :
                            echo "<b>Beneficiary of Contribution 2000 is:</b><b>" . $row['firstname']." ". 
                            $row['lastname'] . "</b>";
                        endwhile;
                        ?>
                        <br>
                        <?php
                        while ($row = $result43->fetch_assoc()) :
                            echo "<b>Beneficiary of Contribution 5000 is:</b><b>" . $row['firstname']." ". 
                            $row['lastname'] . "</b>";
                        endwhile;
                        ?> -->
                        <div class="panel-body">
                            <div class="table-responsive project-stats">
                                <?php
                                $p = $_GET['page'];
                                $page = $p . ".php";
                                if (file_exists($page)) {
                                    include($page);
                                } elseif ($p == "") {
                                    echo "this is the page";
                                } else {
                                    echo "page don't exist";
                                }
                                ?>
                                <center> <a href="#" onclick="window.print()" class="print">Save</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2021 &copy; Ndjangi by pablo.</p>
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

</body>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:25:59 GMT -->

</html>