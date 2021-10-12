<!DOCTYPE html>
<html>

<head>
    <title>Ndjangi|home</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            background: white;

        }

        .navbar {
            width: 100%;
            height: 75px;
            position: fixed;

        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .back {
            background: linear-gradient(to top, rgba(0, 0, 0, 0)25%, rgba(0, 0, 0, 0)25%), url(img/tor.svg);
            background-position: center;
            background-size: 50% 80%;
            height: 70vh;
        }
        .panel-body .dove {
            /* background: linear-gradient(to top, rgba(0, 0, 0, 0)25%, rgba(0, 0, 0, 0)25%), url(img/home.svg); */
            background-position: center;
            background-size: 100% 100%;
            height: 80vh;
        }
        .panel-body .you {
            /* background: linear-gradient(to top, rgba(0, 0, 0, 0)25%, rgba(0, 0, 0, 0)25%), url(img/black.jpeg); */
            background-position: center;
            background-size: 100% 100%;
            height: 80vh;
        }
        

        h3 {
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
            color: black;
        }

        .box h2 {
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .box .content {
            margin: 20px 0 0 0;
        }

        .left .content .social {
            margin: 20px 0 0 0;
        }

        .left .content .social p {
            text-align: justify;
        }

        .left .content .social a {
            padding: 0 2px;
        }

        .left .content .social a span {
            height: 40px;
            width: 40px;
            background: #1a1a1a;
            line-height: 40px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .left .content .social a span:hover {
            background: aqua;
        }

        .icon img {
            width: 100px;
            height: 100px;
            border-radius: 25% 25% 25% 25%;
            padding-left: 20px;
            float: left;
            padding-top: 10px;
        }


        .menu {
            width: 100%;
            float: left;
            height: 70px;
            background: #3f3d56;

        }

        ul {
            float: left;
            display: flex;
            justify-content: space-around;
            align-items: center;

        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;

        }

        ul li a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            transition: 0.4s ease-in-out;
        }

        ul li a:hover {
            color: aqua;
        }

        .small-container {
            max-width: 1080px;

            padding-left: 25px;
            padding-right: 25px;
        }

       

        .title {
            text-align: center;
            margin: 0 auto 50px;
            position: relative;
            line-height: 60px;
            color: #555;

        }

        .title::after {
            content: '';
            background: aqua;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .title1 {
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;

        }

        .title1::after {
            content: '';
            background: aqua;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .title2 {
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;

        }

        .title2::after {
            content: '';
            background: aqua;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        .dove h2{
            color: #3f3d56;
            font-weight: 600;
            text-transform: uppercase;
        }
        .you h2{
           color:#0b2a23f7;
            font-weight: 600;
            text-transform: uppercase;
}
.dove h3{
            color: #0b2a23f7;
            font-weight: 600;
            font-size: medium;
            
        }
        .stats{
 
 font-size: medium;

}
        .you h3{
           color:#0b2a23f7 ;
            font-weight: 600;
            font-size: medium;
            
}
        #box {
            width: fit-content;
            height: fit-content;
            overflow: hidden;
            background: white;
            box-shadow: 250px 250px 250px 250px rgba(0.5, 0.5, 0.5, 0.5);
            border-radius: 10px;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            padding: 10px;
            text-align: center;
            display: none;
        }

 .try img{
           width: 90%;
           height: 60%;
           display: flex;
           flex-direction: column;
           border-radius: 25% 25%;
       }
       .try {
        
        display: flex;
           
       }
       
       

        .rating img {
            width: 40%;
        }

        footer {

            bottom: 0px;
            width: 100%;
            background: #3f3d56;
            color: white;
        }

        .col-4 {
            flex-basis: 25%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            transition: 0.5s;
        }

        .main-content {
            display: flex;
        }

        .main-content .box {
            flex-basis: 50%;
            padding: 10px 20px;
        }
    </style>
    <!-- <link rel="style/css" href="css/drown.css"> -->
</head>

<body>
    <div class="main">
        <div class="navbar">

            <div class="menu">
                <div class="icon">
                    <img src="img/white.jpeg">
                </div>

                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT_US</a></li>
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#">JOIN_US</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>


        <div class="back">

        </div>
        
        <div class="small-container">
            <h2 class="title">Member Administrators</h2>
            <div class="row">
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
            $result = $mysqli->query("select*from admin") or die(mysqli_error($mysqli));
            while ($row = $result->fetch_assoc()) :
            ?>
               
               
                <div class="col-lg-2 try">
                <a href="index2.php?id=<?php echo $row['id'];?>#" onclick="flip()" >
                    <img src="<?php echo $row['images']; ?>">
                    <h2><?php echo $row['username']; ?></h2>
                    <h4><i>Job:<?php echo $row['job']; ?></i></h4>
                    </a>
                </div>
           
                <?php
            endwhile;
            ?>
            </div>
            
              
                <script>
                    var modal = null

                    function flip() {
                        if (modal === null) {
                            document.getElementById("box").style.display = "block";
                            modal = true
                        } else {
                            document.getElementById("box").style.display = "none";
                            modal = null
                        }
                    }
                </script>
  
            <div id="box">
            <button class="close-button" onclick=flip()>Close Menu</button>
                <div class="col-lg-6 col-md-3">

                   
                            <?php
                            include("connection.php");
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $result1 = $mysqli->query("select*from admin where id=$id");
                                while ($data = $result1->fetch_assoc()) :
                            ?>
                            <div class="row">                                 
                                   <div class="col-md-10 ">
                                            <img src="<?php echo $data['images'] ?>" width="150px" class="rounded-corners" height="150px"><br>
                                            </div>
                                            <div class="col-md-3">                                        
                                            <div class="stats">
                        <?php
                                echo "<strong>". $data['username']."</strong><br><br>";
                               
                               
                                ?>
                                 </div>
                                <?php
                                        echo "Contact: " .  $data['email'] . "<br><br>";

                                        echo "Email: " . $data['phone'] . "<br><br>";
                                        echo "Job: " . $data['job'] . "<br><br>";
                                    endwhile;
                                }
                                        ?>
                                            </div>
                                    

                        </div>

                    </div>
                </div>
            </div>
            <center>

                <div class="row">
               
                    <div class="col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                            <div class="you">
                        <h2 class="title1">Our Activities</h2>
                        <ol type="i">
                       <li><h3>Live Chatting meetings every 2 sundays of the month</h3></li> 
                       <li><h3>Failures in payment are rare and if it happens<br> the members are excluded from the community</h3></li>
                       <li><h3>All calculations are done by our system so there is<br> no error probabilty as in other manual tontines</h3></li>  
                        </ol>

                        </div>
                        </div>
                </div>
                    </div>
                  
                    <div class="col-md-6">
                    <div class="panel info-box panel-white">
                        <div class="panel-body">
                        <div class="dove">
                        <h2 class="title2">Our Projects</h2>
                        <ol type="i">
                       <li><h3>Increase the standard of living of all our members with our finances</h3></li> 
                       <li><h3>Increase the standard of living of all our community with our finances</h3></li> 
                       
                        </ol>
                        </div>
                        </div>
                </div>
                    </div>

                </div>
            </center>
        </div>
        <footer>
            <div class="main-content">
                <div class="left box">
                    <h2>About us</h2>
                    <div class="content">
                    <p>Ndjangi, The Tontine of <br> the Future<br>Contact us to Join Us</p>
                        <p>Ndjangi.com, A tontine of projects and relationships!<br>We guarantee a Proper management of your finances</p>
                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>

                    </div>
                </div>
                <div class="center box">
                    <h2>Address</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Dschang, fonakeukeu</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+237 699432345</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">Contact@groupesia.com</span>
                        </div>

                    </div>
                </div>
                <div class="right box">
                    <h2>Contact Us</h2>
                    <div class="content">
                        <form action="#" method="post">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">Message *</div>
                                <textarea rows="2" cols="25" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Send</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </footer>
</body>

</html>