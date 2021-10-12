<?php
session_start();
$update = false;
$id = 0;
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])) {
    
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  $uname=$_SESSION['username'];
  
                                                    $result95 = $mysqli->query("SELECT job from admin  where username='" . $uname . "'") or die(mysqli_error($mysqli));
                                                    while ($row = $result95->fetch_assoc()) :
                                                
                                         $job= $row['job']; 
                                    
    $msg = $_POST['msg'];
    $mysqli->query("INSERT INTO `chat`(`msg`,`job`,`uname`) VALUES ('$msg','$job','$uname')") or die($mysqli->error);
endwhile; 
}
if (isset($_POST['wrong'])) {
    
    $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
    $uname=$_SESSION['username'];
    
                                                      $result95 = $mysqli->query("SELECT job from admin  where username='" . $uname . "'") or die(mysqli_error($mysqli));
                                                      while ($row = $result95->fetch_assoc()) :
                                                  
                                           $job= $row['job']; 
                                      
  
      $mysqli->query("INSERT INTO `chat`(`msg`,`job`,`uname`) VALUES ('Rescue denied','$job','$uname')") or die($mysqli->error);
  endwhile; 
  }
  if (isset($_POST['real'])) {
    include("connection.php");
    $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
    
    $sql="select uname, msg from chat order by chat_id desc limit 1";
    $query= mysqli_query($connect,$sql) or die('error on query');
    $data= mysqli_fetch_assoc($query);
    if($data['msg']=='I need a rescue for marriage'){
        $sql9="select count(firstname) * 1500 as down from member";
        $query= mysqli_query($connect,$sql9) or die('error on query');
        $data9= mysqli_fetch_assoc($query);
        $drown=$data9['down'];
        $uname=$_SESSION['username'];
        $myname=$data['uname'];
        $mysqli->query("INSERT INTO `grantres`(`grantname`,`occasion`,`grant_amount`) VALUES ('$myname','Marriage','$drown')") or die($mysqli->error);
        $mysqli->query("INSERT INTO `chat`(`msg`,`uname`) VALUES ('Rescue Accepted for Marriage. Please everyone should contribute 1500 to refill our rescues','$uname')") or die($mysqli->error);
    }elseif ($data['msg']=='I need a rescue for a Burial') {
        $sql19="select count(firstname) * 2500 as down from member";
        $query= mysqli_query($connect,$sql19) or die('error on query');
        $data19= mysqli_fetch_assoc($query);
        $drown=$data19['down'];
        $myname=$data['uname'];
        $uname=$_SESSION['username'];
        $mysqli->query("INSERT INTO `grantres`(`grantname`,`occasion`,`grant_amount`) VALUES ('$myname','Burial','$drown')") or die($mysqli->error);
        $mysqli->query("INSERT INTO `chat`(`msg`,`uname`) VALUES ('Rescue Accepted for Burial. Please everyone should contribute 2500 to refill our rescues','$uname')") or die($mysqli->error);
    }elseif ($data['msg']=='I need a rescue for my new born') {
        $sql191="select count(firstname) * 4500 as down from member";
        $query= mysqli_query($connect,$sql191) or die('error on query');
        $data191= mysqli_fetch_assoc($query);
        $drown=$data191['down'];
        $myname=$data['uname'];
        $uname=$_SESSION['username'];
        $mysqli->query("INSERT INTO `grantres`(`grantname`,`occasion`,`grant_amount`) VALUES ('$myname','new born','$drown')") or die($mysqli->error);
        $mysqli->query("INSERT INTO `chat`(`msg`,`uname`) VALUES ('Rescue Accepted for a new born . Please everyone should contribute 4500 to refill our rescues','$uname')") or die($mysqli->error);
    }
   
  }
  
if (isset($_SESSION['username'])) {
} else {
    header("location:login.php");
}
$pabs = $_SESSION['username'];
?>


<!DOCTYPE html>
<html>
    <head>
       
        <title>Ndjangi Chat</title>
        

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

        <style>
              #wrapper{
  max-width: 60%;
                min-height: 100%;
                display: flex;
                padding: 5px;
                margin: auto;
                color: #eee;
        
            }
            main{
    width:100%;
    height:100%;
    display:inline-block;
    font-size:15px;
  
    vertical-align:top;
}
main header{
    height:100px;
    padding:30px 20px 30px 40px;
    background-color:#254d69;  
}
main header > *{
    display:inline-block;
    vertical-align:top;
}
main header img:first-child{
    width:45px;
    margin-top:8px;
    border-radius: 50%;
}  
main header img:last-child{
    width:45px;
    margin-top:8px;
    border-radius: 50%;
}
main header div{
    margin-left:90px;
    margin-right:90px;
}
main header h2{
    font-size:25px;
    margin-top:5px;
    text-align:center;
    color:#FFFFFF;  
}
main .inner_div{
    padding-left:0;
    margin:0;
    list-style-type:none;
    position:relative;
    overflow:auto;
    height:480px;
    background-image: url(img/message.svg);
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    position: relative;
    border-top:2px solid #fff;
    border-bottom:2px solid #fff;
     
}
main .triangle{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 8px 8px 8px;
    border-color: transparent transparent
    #6fbced transparent;
    float: right;
    margin-left:20px;
    clear:both;
}
main .message{
    padding:10px;
    color:#000;
    margin-left:15px;
    background-color:#6fbced;
    line-height:20px;
    max-width:40%;
    display:inline-block;
    text-align:left;
    border-radius:5px;
    float: right;
    clear:both;
}
main .triangle1{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 8px 8px 8px;
    border-color: transparent
      transparent #58b666 transparent;
    margin-right:20px;
    float:left;
    clear:both;
}
main .message1{
    padding:10px;
    color:#000;
    margin-right:15px;
    background-color:#58b666;
    line-height:20px;
    max-width:40%;
    display:inline-block;
    text-align:left;
    border-radius:5px;
    float:left;
    clear:both;
}
 
main footer{
    height:25px;
    /* padding:20px 30px 10px 20px; */
    width: 100px;
  
}
main footer .input1{
    resize:none;
    border:100%;
    display:block;
    width:120px;
    height:10px;
    border-radius:3px;
   
    font-size:13px;
    margin-bottom:13px;
    color: black;
}
#box {
            width: fit-content;
            height: fit-content;
            overflow: hidden;
            background: whitesmoke;
            box-shadow: 250px 250px 250px 250px rgba(0.5, 0.5, 0.5, 0.5);
            border-radius: 10px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            padding: 10px;
            text-align: center;
            display: none;
          
           
        }

#delete {
            background-color: #DD2F62;
            padding: 5px 15px;
            border-radius: 6px;
            color: white;
            border: 1px solid rgb(31, 161, 226);
            text-decoration: none;
        }
main footer textarea{
    resize:none;
    width:250px;
    height:30px;
    border-radius:3px;
    font-size:13px;
    color: #000;
    margin-bottom:13px;
    
}
main footer .input2{
    resize:none;
    border:100%;
    display:block;
    width:50px;
    height:30px;
    border-radius:3px;
   
    font-size:13px;
    margin-bottom:13px;
    margin-left:100px;
    color:white;
    text-align:center;
    background-color:black;
    border: 2px solid white; 
}

main footer textarea::placeholder{
    color:#000;
}
.week img{
    width: 100%;
    height: 60%;
}
 
            #left_panel{
                min-height: 250px;
                background-color: #34425A;
                flex: 1;
            }
            #right_panel{
                min-height: 250px;
                background-color: #34425A;
                flex: 3;
                
            }
            #header{
                background-color: #34425A;
                height: 35px;
            }
            #header h2{
                font-size: 200px;
                color: #eee;
            }
            #inner_left_panel img{
                width: 100px;
                height: 100px;
                border-radius:50% ;
                text-align: center;
                border: thin solid white;
            }
            #inner_left_panel{
                background-color: #34425A;
                flex: 1;
                min-height: 250px;
                text-align: center;
            } 
            #inner_right_panel{
                background-color: #eee;
                flex: 3;
                height: 465px;
            } 
            #frost{
               color: #eee;
               border: thin 1px white;
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
                                                                                echo trim($_SESSION['username']);
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

    <div id="box">
        <button class="close-button" onclick=pop()>Close Menu</button>
        <center>
            <div class="contactForm">

                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="wrapper">
                        <h2>Add member</h2>
                    </div>

                    <label for="file_uploader">
                        <input type="file" id="file_uploader" hidden name="my_image">
                        <img src="img/avatar.svg" width="50%" height="50%">
                    </label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                
                            <span>Enter First Name</span> <input type="text" name="login" placeholder="eg:Martin" class="form-control" required>

                            </div>
                            <div class="form-group">
                               
                            <span>Enter Last Name</span><input type="text" name="lastname" placeholder="eg:madrazo" class="form-control" required>

                            </div>
                            <div class="form-group">
                                
                            <span>Create password</span><input type="password" name="password" placeholder="enter password" class="form-control" required>


                            </div>
                            <div class="form-group">
                                
                            Sex:<select name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="undefined">undefined</option>
                                </select>
                            </div>
                            <div class="form-group">
                               
                            <span>Enter Email</span><input type="email" class="form-control" placeholder="example:danm@gmail.com" name="Email" required>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                               
                            <span>Date of Birth</span> <input type="date" name="DOB" class="form-control" required>

                            </div>
                            <div class="form-group">
                               
                            <span>Enter Address</span><input type="text" name="address" class="form-control" placeholder="example:bafang" required>

                            </div>
                            <div class="form-group">
                                
                            <span>Phone Number</span> <input type="text" name="phone" class="form-control" placeholder="example:699027612" required>

                            </div>
                            <div class="form-group">
                              
                            civil status: <select name="status" class="form-control">
                                    <option value="Married">Married</option>
                                    <option value="Not Married">Not Married</option>
                                </select>
                            </div>
                            <div class="form-group">
                                
                            Contribution:<select name="contribution" class="form-control">
                                    <option value="5000">5000</option>
                                    <option value="2000">2000</option>
                                </select>
                            </div>
                            </div>
                    </div>
                            <input type="submit" name="save" class="btn btn-primary" value="Add Member" required>
                       
                </form>


            </div>
        </center>
    </div>
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <div class="sidebar-profile-image">
                        <img src="admin/<?php
                                        if (isset($_SESSION['username'])) {
                                            echo trim($_SESSION['username']);
                                        }

                                        ?>.jpg" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span><?php
                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }

                                ?> <br><small><?php
                                $WITH=$_SESSION['username'];
    
                                                $result32 = $mysqli->query("SELECT job from admin  where username='" . $WITH . "'") or die(mysqli_error($mysqli));
                                                while ($row = $result32->fetch_assoc()) :
                                                ?>
                                    <?php echo $row['job'] ?>
                                <?php endwhile; ?></small></span>
                    </div>

                </div>
            </div>
            <ul class="menu accordion-menu">

                <li class="active"><a href="index.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span>
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
                <li><a href="contact.php" class="waves-effect waves-button"><span class="glyphicon glyphicon-phone-alt"></span>
                        <p>Contact</p>
                    </a></li>
            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->

    <a href="indexVICAF.php">&#8592;</a>
    <div id="wrapper">

<div id="right_panel">
  <h4>Members Online:<?php 
              $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
               $result18 = $mysqli->query("SELECT count(status) as status from member  where status='online'") or die(mysqli_error($mysqli));
                                                    while ($row = $result18->fetch_assoc()) :
                                                
                                         echo $row['status']; 
                                                    endwhile; ?></h4>
                                                    <form action="Groupchat.php" method="post">
                <input type="submit" class="btn btn-success" name="real" value="Accept Rescue">
                <input type="submit" class="btn btn-danger" name="wrong" value="Deny Rescue">
        </form>
    <div id="header">
  
        <center>
            <h1>Ndjangi-Chat</h1>
            
        </center>
    </div>
    <div id="container" style="display: flex;">
        <div id="inner_left_panel">
            <img src="uploads/<?php
                            if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            }

                            ?>.jpg"><br>
            <h3><?php
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                }

                ?></h3>
                
        </div>
        <div id="inner_right_panel">
            <main>
                <script>
                    function show_func() {

                        var element = document.getElementById("chathist");
                        element.scrollTop = element.scrollHeight;

                    }
                </script>

                <form id="myform" action="Groupchat.php" method="POST">
                    <div class="inner_div" id="chathist">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));

                        $query =  $mysqli->query("SELECT uname,msg,job, dt FROM chat where uname!='".$pabs."' and chat_date=curdate() ") or die($mysqli->error);
                        while ($row = $query->fetch_assoc()) :

                        ?>
                            <div id="triangle1" class="triangle1"></div>
                            <div id="message1" class="message1">
                            <div>
                                <span style="color:black;float:right;
                                    font-size:10px;clear:both;">

<h2><?php echo $row['uname']; ?></h2>

                                </span></div>
                                <span style="color:white;float:right;">

                                    <?php echo $row['msg']; ?></span> <br />
                                <div>
                                    <span style="color:black;float:left;
font-size:10px;clear:both;">
                                      
                                      
                                        <?php echo $row['dt']; ?>
                                    </span>
                                </div>
                            </div>
                            <br /><br />
                            <?php

endwhile;
?>
 <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));

                        $query =  $mysqli->query("SELECT uname,msg,images, dt FROM chat where uname!='".$pabs."' and chat_date=curdate() and images like '%jpg' ") or die($mysqli->error);
                        while ($row = $query->fetch_assoc()) :

                        ?>
                            <div id="triangle1" class="triangle1"></div>
                            <div id="message1" class="message1">
                            <div>
                                <span style="color:black;float:right;
                                    font-size:10px;clear:both;">

<h2><?php echo $row['uname']; ?></h2>

                                </span>
                                </div>
                                <div class="week">
                                <img src="<?php echo $row['images']; ?>"> <br />
                                </div>
                                
                                <div>
                                    <span style="color:black;float:left;
font-size:10px;clear:both;">
                                      
                                        <?php echo $row['dt']; ?>
                                    </span>
                                </div>
                            </div>
                            <br /><br />
                            <?php

endwhile;
?> <?php
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));

$query =  $mysqli->query("SELECT uname,msg,job, dt FROM chat where uname='".$pabs."' and chat_date=curdate() ") or die($mysqli->error);
while ($row = $query->fetch_assoc()) :

?>
                            <div id="triangle" class="triangle"></div>
                            <div id="message" class="message">
                            <div>
                                <span style="color:black;float:right;
                                    font-size:10px;clear:both;">

<h2><?php echo $row['uname']; ?></h2>

                                </span></div>
                                <span style="color:white;float:left;">
                                
                               
                                    <?php echo $row['msg']; ?>
                                </span> <br />
                                <div>
                                    <span style="color:black;float:right;
                                    font-size:10px;clear:both;">

                                        <?php echo $row['dt']; ?>
                                    </span>
                                </div>
                            </div>
                            <br /><br />
                            
                        <?php

                        endwhile;
                        ?>

                    </div>
                    <footer>
                        <table>
                            <tr>
                                <th>

                                </th>
                                <th>
                                    <textarea id="msg" name="msg" rows='3' cols='50' placeholder="Type your message">
    </textarea>
                                </th>
                                <th>
                                    <input class="input2" type="submit" id="submit" name="submit" value="send" </th>
                            </tr>
                        </table>
                    </footer>
                </form>

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
</html>