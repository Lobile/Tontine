<?php
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result3 = $mysqli->query("SELECT  member_id, avalist_name, firstname,lastname,phone,gender,mstatus,address,Today FROM member") or die(mysqli_error($mysqli));
$result2 = $mysqli->query("SELECT  member_id, firstname FROM member") or die(mysqli_error($mysqli));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tontine - Group</title>
        <link rel="stylesheet" href="css/register.css">
    </head>
    <body>
    <a href="index.php">&#8592;</a>
     <div class="bg">         
            <center>
            <div class="contactForm">
                    <form action="pabs.php" method="post" enctype="multipart/form-data">
                       <div class="wrapper">
                        <h2>Update benefit_date</h2>
                        </div>
                        <div class="form-group">
                            Firstname:
                        <select name="name" class="form-control">
                        <?php while ($row=$result3->fetch_assoc()):?>
                             <option value="<?php echo $row['firstname']; ?>"><?php  echo $row['firstname'];?></option>
                             <?php endwhile;?>
                            </select>
                            </div>
                       
                        <div class="inputBox">
                            <input type="date" name="date" required>
                            <span>Enter New date</span>
                        </div>
                        
                        <div class="inputBox">
                        <?php while ($row=$result2->fetch_assoc()):?>
                            <input type="submit" name="change" value="change=<?php echo $row['firstname']; ?>" id="" required>
                            <?php endwhile;?>
                        </div>
                    </form>
                       
                    
                </div>
                </center>
                </div>

    </body>

</html>
