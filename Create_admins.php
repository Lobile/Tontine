<!DOCTYPE html>
<html>
    
<!-- Mirrored from phantom-themes.com/modern/Source/admin1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:33:02 GMT -->
<head>
        
        <!-- Title -->
        <title>Modern | Login - Sign up</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
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
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-register">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                            <?php
session_start();
        if (isset($_SESSION['message'])):
            ?>

            <div class="alert alert-<?= $_SESSION['msg_type'] ?> ">

                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>
                                <a href="#" class="logo-name text-lg text-center">Ndjangi</a>
                                <p class="text-center m-t-md">Create an Adherent admin account</p>
                                <form class="m-t-md" action="includes.php" method="post" enctype="multipart/form-data">
                                <label for="file_uploader">
				<input type="file" id="file_uploader" hidden name="my_image">
				<img src="img/avatar.svg" width="50%" height="50%">
				</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="login" >
                                    </div>
                                    <div class="form-group">
                                    Role Status:
                        <select name="job" class="form-control">
                             <option value="President">President</option>
                             <option value="Auditor">Auditor</option>
                             <option value="Treasurer">Treasurer</option>
                             <option value="accountant">Accountant</option>
                             <option value="Secretary">Secretary</option>
                             <option value="Programmer">Programmer</option>
                            </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <label>
                                        <input type="checkbox"> Agree the terms and policy
                                    </label>
                                   
                                    <button type="submit" name="host" class="btn btn-success btn-block m-t-xs">Submit</button>
                                    
                                </form>
                                <p class="text-center m-t-xs text-sm">2021 &copy; Ndjangi by Pablo.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

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
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        
    </body>

<!-- Mirrored from phantom-themes.com/modern/Source/admin1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 20:33:02 GMT -->
</html>