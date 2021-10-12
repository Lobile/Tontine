<?php
require "global2.php";

$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$pabs = $_SESSION['username'];
$result16 = $mysqli->query("SELECT sum(helps_amount) as helps FROM helps inner join beneficiary on DOT=beneficiary ") or die(mysqli_error($mysqli));
$result18 = $mysqli->query("SELECT sum(amount) as pay , sum(refunded_amount) as damn,  sum(amount * 10/100) as amountpay FROM borrows left join avance on borrows.bname=avance.avance_name inner join beneficiary on beneficiary.beneficiary = borrows.DOP") or die(mysqli_error($mysqli));
$result17 = $mysqli->query("SELECT sum(saving_amount) as save ,sum(withdrawed_savings) as drains, sum(saving_amount+saving_amount * 5/100) as suminterest FROM savings left join withdraw on withdraw.withdraw_name=savings.sname inner join beneficiary on beneficiary.beneficiary = savings.gone") or die(mysqli_error($mysqli));
$result14 = $mysqli->query("SELECT  sum(contribution_payment) as format  FROM Contribution   where contribution_payment=2000") or die(mysqli_error($mysqli));
$today = date("Y-m-d");
$result65 = $mysqli->query("SELECT distinct(sum(contribution_amount))* 80/100 as dolp from contribution where contribution_amount=2000") or die(mysqli_error($mysqli));
$result85 = $mysqli->query("SELECT distinct(sum(contribution_amount))* 80/100 as dolp from contribution where contribution_amount=5000") or die(mysqli_error($mysqli));
$result20 = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary") or die(mysqli_error($mysqli));
$result56 = $mysqli->query("SELECT distinct((sum(contribution_amount))* 20/100)+ (count(firstname)*30000) +sum(saving_amount)-sum(amount) as cash from borrows right join savings on savings.savings_id=borrows.id  right join contribution on contribution_id=id inner join member on contribution_id=member_id") or die(mysqli_error($mysqli));
$result15 = $mysqli->query("SELECT  sum(contribution_payment) as formul  FROM Contribution  where  contribution_payment=5000") or die(mysqli_error($mysqli));
$result19 = $mysqli->query("SELECT  sum(contribution_payment) as formza  FROM Contribution   where  contribution_payment=7000") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT  member_id,status, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result3 = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));



$result2 = $mysqli->query("SELECT count(firstname) as total FROM member ") or die(mysqli_error($mysqli));
$result32 = $mysqli->query("SELECT count(beneficiary) as total FROM beneficiary ") or die(mysqli_error($mysqli));
$result4 = $mysqli->query("SELECT  sum(contribution_payment) as form  FROM Contribution ") or die(mysqli_error($mysqli));
/* pre_r($result); */
$result34 = $mysqli->query("SELECT member_id, contribution_benefit, contribution_paidfine, contribution_fine + contribution_amount as damn, firstname,contribution_payment,contribution_amount, beneficiary FROM member inner join beneficiary on member_id=benefit_id inner join Contribution on contribution_id=member_id order by contribution_amount asc ") or die(mysqli_error($mysqli));
$result62 = $mysqli->query("SELECT  sum(contribution_paidfine) as san, sum(contribution_payment) as form,sum(contribution_amount) as contrib FROM Contribution") or die(mysqli_error($mysqli));
$result4 = $mysqli->query("SELECT  sum(contribution_payment) as form  FROM Contribution inner join beneficiary on beneficiary.benefit_id = Contribution.contribution_id") or die(mysqli_error($mysqli));
$result5 = $mysqli->query("SELECT  sum(contribution_payment) as formal  FROM Contribution inner join beneficiary on beneficiary.benefit_id = Contribution.contribution_id where Today = beneficiary and contribution_payment = 5000 ") or die(mysqli_error($mysqli));
$result9 = $mysqli->query("SELECT  sum(contribution_payment) as former  FROM Contribution inner join beneficiary on beneficiary.benefit_id = Contribution.contribution_id where Today = beneficiary and contribution_payment = 7000 ") or die(mysqli_error($mysqli));
if (isset($_GET['case'])) {
    $id = $_GET['case'];
    if ($id >= $today) {
        header("location:index5.php"); 
    }else{
        header("location:indexVIC.php");
    }
  
}

if(isset($_SESSION['username'])){

}else{
    header("location:login.php");
}
?>  
<!DOCTYPE html>
<html>
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
    #box {
        width: fit-content;
        height: fit-content;
        overflow: hidden;
        background: whitesmoke;
        box-shadow: 25px 25px 25px rgba(0.2, 0.2, 0.2, 0.2);
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
    .table-responsive {
    height: 55%;
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
    .sidebar{
    position: fixed;
  
}

.page-inner{
    margin-left: 145px;
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

    .panel {
        box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.2);
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

    #delete {
        background-color: #DD2F62;
        padding: 5px 15px;
        border-radius: 6px;
        color: white;
        border: 1px solid rgb(31, 161, 226);
        text-decoration: none;
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
    /* [aria-current="page"] {
pointer-events: none;
cursor: default;
text-decoration: none;
color: black;
} */
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
                      <img src="uploads/<?php
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
                                <img class="img-circle avatar" src="uploads/<?php
                                                                            if (isset($_SESSION['username'])) {
                                                                                echo $_SESSION['username'];
                                                                            }

                                                                            ?>.jpg" width="50" height="50" alt="">

                                <span class="user-name"><?php
                                            if (isset($_SESSION['username'])) {
                                                echo trim($_SESSION['username']);
                                            }

                                            ?><i class="fa fa-angle-down"></i></span>


                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="Groupchat1.php"><i class="fa fa-comments"></i>Chat</a></li>
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

                                    ?> <br><small>Adherent</small></span>
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
                    <li><a href="contact2.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-phone-alt"></span>
                        <p>Contact</p>
                    </a></li>

            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
    <div class="page-inner">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>

        <?php while ($row = $result32->fetch_assoc()) : ?>
            <div id="main-wrapper">
                <div class="row">

                    
                <?php endwhile; ?>
                
                <a href="contribution.php?page=details2000">
                <?php
                        $result51 = $mysqli->query("SELECT contribution_benefit from contribution inner join member on contribution_id=member_id where firstname='".$pabs."'") or die(mysqli_error($mysqli));
                        while ($row = $result51->fetch_assoc()) :
                        ?>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['contribution_benefit'] ?></span></p>
                                        <span class="info-box-title">Contribution_benefit</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="glyphicon glyphicon-yen"></i>
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

                    <?php endwhile;
                    ?>
                </a>
                <a href="savings5.php">
                    <?php 
                     $result6 = $mysqli->query("SELECT sum(grant_amount) as helps FROM grantres  where grantname='".$pabs."'") or die(mysqli_error($mysqli));
                    while ($row = $result6->fetch_assoc()) : ?>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>FCFA <span class="counter"><?php echo $row['helps'] ?></< /span>
                                        </p>
                                        <span class="info-box-title">Granted_Rescues</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="glyphicon glyphicon-btc"></i>
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
                </a>
                <div>
                    <div class="row">
                        <a href="borrows5.php">
                            <?php 
                             $result8 = $mysqli->query("SELECT sum(amount) as pay , sum(refunded_amount) as damn,  sum(amount * 10/100) as amountpay FROM borrows left join avance on borrows.bname=avance.avance_name  where bname='".$pabs."'") or die(mysqli_error($mysqli));
                            while ($row = $result8->fetch_assoc()) : ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel info-box panel-white">
                                        <div class="panel-body">
                                            <div class="info-box-stats">
                                                <p>FCFA <span class="counter"><?php echo $row['pay'] ?></< /span>
                                                </p>
                                                <span class="info-box-title">Loans</span>
                                            </div>
                                            <div class="info-box-icon">
                                                <i class="glyphicon glyphicon-yen"></i>
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
                        
                            <?php endwhile; ?>
                            <a>
                                <a href="helps5.php">
                                    <?php
                                     $result7 = $mysqli->query("SELECT sum(saving_amount) as save ,sum(withdrawed_savings) as drains, sum(saving_amount+saving_amount * savings_interest) as suminterest FROM savings left join withdraw on withdraw.withdraw_name=savings.sname  where sname='".$pabs."'") or die(mysqli_error($mysqli));
                                    while ($row = $result7->fetch_assoc()) :
                                    ?>

                                        <div class="col-lg-3 col-md-6">
                                            <div class="panel info-box panel-white">
                                                <div class="panel-body">
                                                    <div class="info-box-stats">
                                                        <p>FCFA <span class="counter"><?php echo $row['save'] ?></< /span>
                                                        </p>
                                                        <span class="info-box-title">Savings</span>
                                                    </div>
                                                    <div class="info-box-icon">
                                                        <i class="glyphicon glyphicon-btc"></i>
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

                <?php endwhile; ?>
                </a>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <?php

                                if (isset($_SESSION['message'])) :
                                ?>

                                    <div class="alert alert-<?= $_SESSION['msg_type'] ?> ">

                                        <?php
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <center>
                                <?php
                                $today = date("d-m-Y");
                                echo "<h2>Journal of the <u>" . $today . "</u></h2>";
                                ?>
                                </center>
                                <div class="panel-heading">
                                    <h4 class="panel-title">Members</h4>
                                </div>
                             
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th>FirstName</th>
                                                    <th>LastName</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    <th>Address</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $result->fetch_assoc()) :
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['firstname'] ?></td>
                                                        <td><?php echo $row['lastname'] ?></td>
                                                        <td><?php echo $row['phone'] ?></td>
                                                        <td><?php echo $row['gender'] ?></td>
                                                        <td><?php echo $row['status'] ?></td>
                                                        <td><?php echo $row['address'] ?></td>
                                                    
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="stats-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Finances</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                <li>Members<div class="text-success pull-right"><?php while ($row = $result2->fetch_assoc()) : echo $row['total'];
                                                                                                                    endwhile; ?><i class="fa fa-level-up"></i></div>
                                                        </li>
                                                    <li>Contribution2000<div class="text-success pull-right"><?php while ($row = $result14->fetch_assoc()) : echo $row['format'];
                                                                                                                endwhile; ?><i class="fa fa-level-up"></i></div>
                                                    </li>
                                                    <li>Amount benefited2000<div class="text-success pull-right"><?php while ($row = $result65->fetch_assoc()) : echo $row['dolp'];
                                                                                                                    endwhile; ?><i class="fa fa-level-up"></i></div>
                                                    </li>
                                                    <li>Contribution5000<div class="text-success pull-right"><?php while ($row = $result15->fetch_assoc()) : echo $row['formul'];
                                                                                                                endwhile; ?><i class="fa fa-level-up"></i></div>
                                                    </li>
                                                    <li>Amount benefited5000<div class="text-success pull-right"><?php while ($row = $result85->fetch_assoc()) : echo $row['dolp'];
                                                                                                                    endwhile; ?><i class="fa fa-level-up"></i></div>
                                                    </li>
                                                    <li>loans<div class="text-danger pull-right"><?php while ($row = $result18->fetch_assoc()) : echo $row['pay'];
                                                                                                    endwhile; ?><<i class="fa fa-level-down"></i></div>
                                                    </li>
                                                    <li>Savings<div class="text-danger pull-right"><?php while ($row = $result17->fetch_assoc()) : echo $row['save'];
                                                                                                    endwhile; ?><<i class="fa fa-level-down"></i></div>
                                                    </li>
                                                    <li>Contributed Rescues<div class="text-success pull-right"><?php while ($row = $result16->fetch_assoc()) : echo $row['helps'];
                                                                                                        endwhile; ?><<i class="fa fa-level-up"></i></div>
                                                        </li>
                                                        <li>Total Rescues<div class="text-success pull-right"><?php  $result80 = $mysqli->query("SELECT count(firstname)*25000 as totalres from member") or die(mysqli_error($mysqli)); while ($row = $result80->fetch_assoc()) : echo $row['totalres'];
                                                                                                        endwhile; ?><<i class="fa fa-level-up"></i></div>
                                                        </li>
                                                    <li>Cash Register<div class="text-success pull-right"><?php while ($row = $result56->fetch_assoc()) : echo $row['cash'];
                                                                                                            endwhile; ?><<i class="fa fa-level-up"></i></div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2021 &copy; Ndjangi by Groupe SIA.</p>
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



</html>