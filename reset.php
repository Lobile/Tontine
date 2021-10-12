<?php
session_start();
  include("connection.php");
  if (isset($_POST['reset'])) {
   $sql= "update contribution set contribution_payment=null";
   if(mysqli_query($connect, $sql)){
    $_SESSION['message'] = "Reset successful";
    $_SESSION['msg_type'] = "success";
    header("location:index.php");
}
    $sql2="update contribution set contribution_fine=null";
    if(mysqli_query($connect, $sql2)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql20="update contribution set contribution_paidfine=null";
    if(mysqli_query($connect, $sql20)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql3="update contribution set contribution_benefit=null";
    if(mysqli_query($connect, $sql3)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql4="delete from borrows";
    if(mysqli_query($connect, $sql4)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql5="alter table borrows drop id";
    if(mysqli_query($connect, $sql5)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql6="alter table borrows add id int not null primary key auto_increment";
    if(mysqli_query($connect, $sql6)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql7="delete from savings";
    if(mysqli_query($connect, $sql7)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql8="alter table savings drop savings_id";
    if(mysqli_query($connect, $sql8)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql9="alter table savings add savings_id int not null primary key auto_increment";
    if(mysqli_query($connect, $sql9)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql71="delete from grantres";
    if(mysqli_query($connect, $sql71)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql81="alter table grantres drop grant_id";
    if(mysqli_query($connect, $sql81)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql91="alter table grantres add grant_id int not null primary key auto_increment";
    if(mysqli_query($connect, $sql91)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql1="delete from helps";
    if(mysqli_query($connect, $sql1)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
   $sql10= "alter table helps drop helps_id";
   if(mysqli_query($connect, $sql10)){
    $_SESSION['message'] = "Reset successful";
    $_SESSION['msg_type'] = "success";
    header("location:index.php");
}
    $sql11="alter table helps add helps_id int not null primary key auto_increment";
    if(mysqli_query($connect, $sql11)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql12=" update contribution set activefine=1";
    if(mysqli_query($connect, $sql12)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql13=" update contribution set activepaid=1";
    if(mysqli_query($connect, $sql13)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
    $sql565=" update member set activeres=0";
    if(mysqli_query($connect, $sql565)){
        $_SESSION['message'] = "Reset successful";
        $_SESSION['msg_type'] = "success";
        header("location:index.php");
    }
  }
?>