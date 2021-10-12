<?php 
  //   if(isset($_GET['fileSize'])){
	// 	echo $_GET['fileSize'];
	// }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kode.bragherstudio.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 09:19:33 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ndjangi- Login Page</title>

  <!-- ========== Css Files ========== --> 
  <link href="css/root.css" rel="stylesheet">
  </head>
  <body style="background-color: #f5f5f5;">

    <div class="login-form">
      <form action="check.php" method="post">
        <div class="top">
          <img src="img/black.jpeg" alt="icon" class="icon">
          <h1>Ndjangi</h1>
         
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" name="login" class="form-control" placeholder="Username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-success">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div>
          <button type="submit" class="btn btn-success btn-block">LOGIN</button>
        </div>
      </form>
    
    </div>

</body>

<!-- Mirrored from kode.bragherstudio.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 09:19:34 GMT -->
</html>