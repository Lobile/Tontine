<?php
require "global2.php";

$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result3 = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result6 = $mysqli->query("SELECT sum(helps_amount) as helps FROM helps") or die(mysqli_error($mysqli));
$result8 = $mysqli->query("SELECT sum(amount) as pay , sum(refunded_amount) as damn,  sum(amount+amount * 10/100) as amountpay FROM borrows left join avance on borrows.bname=avance.avance_name") or die(mysqli_error($mysqli));
$result7 = $mysqli->query("SELECT sum(saving_amount) as save ,sum(withdrawed_savings) as drains, sum(saving_amount+saving_amount * 5/100) as suminterest FROM savings left join withdraw on withdraw.withdraw_name=savings.sname ") or die(mysqli_error($mysqli));
$result2 = $mysqli->query("SELECT count(firstname) as total FROM member") or die(mysqli_error($mysqli));
/* pre_r($result); */
$result4 = $mysqli->query("SELECT  sum(contribution_payment) as form  FROM Contribution ") or die(mysqli_error($mysqli));
if(isset($_SESSION['username'])){

}else{
    header("location:login.php");
}
?>  

<!DOCTYPE html>
<html>
    
<!-- Mirrored from phantom-themes.com/modern/Source/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:25:00 GMT -->
<head>
        
        <!-- Title -->
        <title>Ndjangi | Admin Dashboard</title>
        
      
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

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
    col-lg-3 col-md-6{
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
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
    
    #box img {
        width: 20%;
        height: 20%;
    }
  
    #delete{
            background-color:#DD2F62;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226);
            text-decoration:none;
        }
        [aria-current="page"] {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
  color: black;
}
            </style>
       
        
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
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Christopher Palmer</p>
                                                        <p class="msg-text">See you soon !</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                        <p class="task-details">New user registered.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                        <p class="task-details">Database error.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                        <p class="task-details">Reached 24k likes</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <img class="img-circle avatar" src="admin/<?php
               if (isset($_SESSION['username'])){
                  echo $_SESSION['username'];
                }

                   ?>.jpg" width="50" height="50" alt="">
                                        
                                        <span class="user-name"><?php
               if (isset($_SESSION['username'])){
                  echo $_SESSION['username'];
                }
                   ?><i class="fa fa-angle-down"></i></span>

                                       
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
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
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="admin/<?php
               if (isset($_SESSION['username'])){
                  echo $_SESSION['username'];
                }

                   ?>.jpg" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php
               if (isset($_SESSION['username'])){
                  echo $_SESSION['username'];
                }

                   ?> <br><small>Admin</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="profile.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-star"></span><p>Start meeting</p></a></li>
                        <li><a href="cotisation.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Contibution</p></a></li>
                        <li><a href="history.php" class="waves-effect waves-button"><span class="icon-book-open"></span><p>View Reports</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Others</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <li><a href="helps.php">Savings</a></li>
                                <li><a href="borrows.php">Loans</a></li>
                                <li><a href="savings.php">Rescues</a></li>
                               
                            </ul>
                        </li>
                        
                      
                       
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-gift"></span><p>Extra</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
        

                <div id="main-wrapper">
                    <div class="row">
               
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">107,200</p>
                                        <span class="info-box-title">Meetings</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
            while ($row = $result2->fetch_assoc()):
                ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $row['total'] ?></p>
                                        <span class="info-box-title">Members</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php
            while ($row = $result4->fetch_assoc()):
                ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['form'] ?></span></p>
                                        <span class="info-box-title">Contribution</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php while ($row = $result6->fetch_assoc()): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['helps'] ?></</span></p>
                                        <span class="info-box-title">Rescue</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="wi wi-day-cloudy weather-icon"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php while ($row = $result8->fetch_assoc()): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['pay'] ?></</span></p>
                                        <span class="info-box-title">Loans</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="fa fa-github"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['amountpay'] ?></</span></p>
                                        <span class="info-box-title">Loans+Fine</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="fa fa-flickr"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php
            while ($row = $result7->fetch_assoc()):
                ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['save'] ?></</span></p>
                                        <span class="info-box-title">Savings</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="jstree-icon jstree-themeicon fa fa-file icon-state-default icon-md jstree-themeicon-custom"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['suminterest'] ?></</span></p>
                                        <span class="info-box-title">Savings+interest</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="fa fa-cc-mastercard"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['drains'] ?></</span></p>
                                        <span class="info-box-title">Withdrawed savings</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <?php endwhile;?>
                    <div id="box">
                    <button class="close-button"  onclick=pop()>Close Menu</button>
                                <center>
            <div class="contactForm">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                       <div class="wrapper">
                        <h2>New member</h2>
                        </div>
                        <label for="file_uploader">
				<input type="file" id="file_uploader" hidden name="my_image">
				<img src="img/avatar.svg" width="50%" height="50%">
				</label>
                        <div class="inputBox">
                            <input type="text" name="login" required>
                            <span>Enter First Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="lastname" required>
                            <span>Enter Last Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required>
                            <span>Create password</span>
                        </div>
                        <div class="form-group">
                            Assign Avalist:
                        <select name="avalist" class="form-control">
                        <?php while ($row=$result3->fetch_assoc()):?>
                             <option value="<?php echo $row['firstname']; ?>"><?php  echo $row['firstname'];?></option>
                            <?php endwhile;?>
                            </select>
                            </div>
                        
                        <div class="inputBox">
                            <input type="text" name="gender" required>
                            <span>Enter Gender</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="Email" required>
                            <span>Enter Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="date" name="DOB" required>
                            <span>Date of Birth</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="address" required>
                            <span>Enter Address</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" required>
                            <span>Phone Number</span>
                        </div>
                        <div class="form-group">
                        civil status:
                            <select name="status" class="form-control">
                             <option value="Married">Married</option>
                             <option value="Not Married">Not Married</option>
                            </select>
                        </div>
                            <div class="form-group">
                            Contribution:
                        <select name="contribution" class="form-control">
                             <option value="5000">5000</option>
                             <option value="2000">2000</option>
                             <option value="7000">Both</option>
                            </select>
                            </div>
                        
                         
                        <div class="inputBox">
                            
                            <input type="submit" name="save" value="Add Member" required>
                           
                        </div>
                    </form>
                       
                    
                </div>
                </center>
                                </div>
                    <?php

if (isset($_SESSION['message'])):
    ?>

    <div class="alert alert-<?= $_SESSION['msg_type'] ?> ">

        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif; ?>
                    
             

                        <?php
$today=date("d-m-Y");
echo"<h2>Journal of the <u>".$today."</u></h2>";
?>
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Members</h4>
                                </div>
                                <center><a href="#" onclick="pop()"><button class="btn btn-rounded" aria-current="page">Add Member</button></a></center>
                               

                                <script>
    var modal = null
 function pop() {
   if(modal === null) {
     document.getElementById("box").style.display = "block";
     modal = true
   } else {
     document.getElementById("box").style.display = "none";
     modal = null
   }
 }
 </script>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                       <table class="table">
                                           <thead>
                                               <tr>
                                               <th>Date</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Endorser</th>
                    <th>Marital status</th>
                    <th>Address</th>
                    <th colspan="3">Action</th>  
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php
            while ($row = $result->fetch_assoc()):
                ?>
                                               <tr>
                                               <td><?php echo $row['Today'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>                   
                    <td><?php echo $row['phone'] ?></td>                   
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['avalist_name'] ?></td>
                    <td><?php echo $row['mstatus'] ?></td>
                    <td><?php echo $row['address'] ?></td>                   
                    <td colspan="4">
                        <div class="action">                      
                        <a href="Process.php?delete=<?php echo $row ['member_id']; ?>" id="delete">Delete</a>
                           </div>
                    </td>
                                               </tr>
                                               <?php endwhile; ?>
                                           </tbody>
                                        </table>
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