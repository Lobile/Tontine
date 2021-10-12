<?php
include("connection.php");
session_start();

$admin_tb='admin';
$member_tb='member';
$sec_tb='secretary';
if (isset($_POST)&&!empty($_POST['login'])&&!empty($_POST['password'])){
    extract($_POST);
$sql="select password from ".$member_tb." where firstname='".$login."'";
$query= mysqli_query($connect,$sql) or die('error on query');
$data= mysqli_fetch_assoc($query);

if ($data['password']!=$password) {
    ?>
    <script language="JavaScript">
        alert("login or password incorrect. Please re-enter your login and password. If you are not a member please pay your registration to the 699027926 and you will recieve an email shortly for you to Login");
        document.location.replace("login.php");
        </script>
        <?php
}else {
    $_SESSION['username']=trim($_POST['login']);
    $pabs=$_SESSION['username'];
    $sql3="update member set status='online' where firstname='".$pabs."'";
    $query= mysqli_query($connect,$sql3) or die('error on query');
    header("location:meetingsAD.php");
}
}else {
    ?>
      <script language="JavaScript">
      alert("login or password empty. Please enter login and password");
      document.location.replace("login.php");
      </script>
    <?php
}
if (isset($_POST)&&!empty($_POST['login'])&&!empty($_POST['password'])){
    extract($_POST);
$sql="select password from ".$admin_tb." where userName='".$login."'";
$query= mysqli_query($connect,$sql) or die('error on query');
$data= mysqli_fetch_assoc($query);

if ($data['password']!=$password) {
    ?>
    <script language="JavaScript">
        alert("login or password incorrect. Please re-enter your login and password. If you are not a member please pay your registration to the 699027926 and you will recieve an email shortly for you to Login");
        document.location.replace("login.php");
        </script>
        <?php
}else {
    $_SESSION['username']=trim($_POST['login']);
    $pabs=$_SESSION['username'];
    $sql="update member set status='online' where firstname='".$pabs."'";
    $query= mysqli_query($connect,$sql) or die('error on query');
    header("location:meetings.php");
}
}else {
    ?>
      <script language="JavaScript">
      alert("login or password incorrect. Please re-enter your login and password. If you are not a member please pay your registration to the 699027926 and you will recieve an email shortly for you to Login");
      document.location.replace("login.php");
      </script>
    <?php
}
if (isset($_POST)&&!empty($_POST['login'])&&!empty($_POST['password'])){
    extract($_POST);
$sql="select password from ".$admin_tb." where userName='".$login."' and job = 'Secretary'";
$query= mysqli_query($connect,$sql) or die('error on query');
$data= mysqli_fetch_assoc($query);

if ($data['password']!=$password) {
    ?>
    <script language="JavaScript">
        alert("login or password incorrect. Please re-enter your login and password");
        document.location.replace("login.php");
        </script>
        <?php
}else {
    $_SESSION['username']=trim($_POST['login']);
    $pabs=$_SESSION['username'];
    $sql2="update member set status='online' where firstname='".$pabs."'";
    $query= mysqli_query($connect,$sql2) or die('error on query');
    header("location:meetingsSEC.php");
}
}else {
    ?>
      <script language="JavaScript">
      alert("login or password empty. Please enter login and password");
      document.location.replace("login.php");
      </script>
    <?php
}

?>