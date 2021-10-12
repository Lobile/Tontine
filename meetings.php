<?php
session_start();
if(isset($_SESSION['username'])){

}else{
    header("location:login.php");
}
?>


<html>
    <head>
        <script src="https:code//code.jquery.com/jquery-2.1.3.min.js"></script>
       
        <link rel="stylesheet" href="./css/all.min.css">
        <title>Database</title>


        <style>
                
              
        @import url('../font.css');


:root {
    /*Theme colors*/
    --text-gray: rgba(39, 4, 4, 0.144);
    --text-light: #686666da;
    --bg-color: black;
    --white: #ffffff;
    --midnight: #104f55;
    --sky: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    --black: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);
    --pink: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
    --blueblack: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    --blackgrey: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0.15) 100%), radial-gradient(at top center, rgba(255, 255, 255, 0.40) 0%, rgba(0, 0, 0, 0.40) 120%) #989898;
    background-blend-mode: multiply, multiply;
    --bb: linear-gradient(to top, #09203f 0%, #537895 100%);
    /*theme font*/
    --Philosopher: 'Philosopher';
    --Niconne: 'Niconne';
    --Playfair: 'Playfair';
    --Playball: 'Playball';
    --bg: linear-gradient(to top, #09203f 0%, #537895 100%);
    --Chau: 'Chau';
    --Lobster: 'Lobster';
    --Merri: 'Merri';
    --JosefinSans: 'JosefinSans';
    --Langar: 'Langar';
}
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
    .panel{
        box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.2);
        border-radius: 5%;
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
#table{
    color: black;
    font-size:15px;
    
}

table{
    width:50%;
    animation: change 1s;
}
@keyframes change {
    from{
        transform: scale(0);
    }
    to{
        transform: scale(auto);
    }
}



.search{
    display:flex;
    flex-direction:row;
    margin-left:25%;
}

.action{
    display:flex;
    flex-direction:row;
}

.action a{
    margin-left:15px;
    text-decoration:none;
}

#myinput{
                width: 30%;
                font-size: 16px;
                padding: 5px 5px 5px 10px;
                border: 1px solid blue;
                margin-top: 30px;
                border-radius:6px;
            }

            #myinput1{
                margin-left: 25px;
                width: 30%;
                border-radius:6px;
                font-size: 16px;
                padding: 5px 10px 5px 20px;
                border: 1px solid blue;
                margin-top: 30px;
            }

    #BC{
        margin-top:20px;
    }

    #home{
        width: 100px;
    height:100px;
    border: none;
    border-radius: 50%;
    }

    table thead tr th{
        padding:25px;
    }

    table tr td{
        padding:15px;
       
        
    }

    table, th, td {
   border: 1px dotted black;
}

#edit{
    background-color: rgb(31, 161, 221);
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 221); 
        }

        #delete{
            background-color: #38d39f;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226); 
        }
        
        #view{
            background-color: rgb(31, 100, 250);
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226); 
        }
        
        </style>

    </head>


    <body>
   

      
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
        <!-- <h1 style="color:#09203f;"><b> <i> These are the 2000  Tontine Members </i></b></h1> -->
        <!-- <img src="images/logo-dark.png" id="home"> -->

      


    
<?php
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT  benefit_id, beneficiary FROM beneficiary where benefit_id%2=1") or die(mysqli_error($mysqli));

/* pre_r($result); */
?>  
            <div id ="box">
                <div class="contactForm">
                    <form action="meet.php" method="post" enctype="multipart/form-data">
                       <div class="wrapper">
                        <h2>New sessions</h2>
                        </div>
                        <div class="form-group">
                            Enter start_date:
                            <input type="date" name="DOB" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            Enter end_date:
                            <input type="date" name="DOB" class="form-control" required>
                        </div> 
                        <div class="inputBox">
                            <input type="submit" name="save" id="view" value="Add meeting" required>
                        </div>
                    </form>
                </div>
             </div>
             
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
<center>
<div class="container">
    <div class="row">
        <table  class="" style=" font-family: var(--JosefinSans);"  id="table">
            <thead style="color: black; font-family: var(--Philosopher);margin:0;">
                <tr>
                    <th>No</th>
                    <th>Sessions</th>
                   
                    <th colspan="3">Action</th>  
                </tr>
            </thead>
            <hr>
            <?php
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['benefit_id'] ?></td>
                    <td><?php echo $row['beneficiary'] ?></td>
                    <td colspan="4">
                        <div class="action">
                        <a href="index.php?case=<?php echo $row ['beneficiary']; ?>" id="delete">Go</a> 
                           </div>
                    </td>
                </tr>
            <?php endwhile; ?>
   
<script>
 var mode = null
 function popup() {
   if(mode === null) {
     document.getElementById("box5").style.display = "block";
     mode = true
   } else {
     document.getElementById("box5").style.display = "none";
     mode = null
   }
 }
</script>
        </table>
    </div>
    </center>


    <?php

    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>

</div>

<script>
    function myFunction() {
        var input, filter, table, i, txtValue, td, tr;

        input = document.getElementById('myinput');
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");


        //loop through

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction1() {
        var input, filter, table, j, txtValue, td, tr;

        input = document.getElementById('myinput1');
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");


        //loop through

        for (j = 0; j < tr.length; j++) {
            td = tr[j].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[j].style.display = "";
                } else {
                    tr[j].style.display = "none";
                }
            }
        }
    }
</script>

                        
                    
  
         <script>
                function myPrint(myform){
                    var printdata = document.getElementById(myform);
                    newwin= window.open("");
                    newwin.document.write(printdata.outerHTML);
                    newwin.print();
                    newwin.close();
                }


        </script>
    </body>
</html>