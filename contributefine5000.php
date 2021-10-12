<html>
    <head>
        


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

#table{
    color: black;
    font-size:15px;

}
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
            text-decoration:none;
        }

        #delete{
            background-color:#38d39f;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226);
            text-decoration:none;
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
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT member_id, contribution_id, lastname, firstname FROM Member right join Contribution on member_id = contribution_id where contribution_payment like 'not_paid5%' and activefine = 1 ") or die(mysqli_error($mysqli));
$result4 = $mysqli->query("SELECT member_id, contribution_id, sum(contribution_amount)*80/100 as derty, firstname, beneficiary FROM Member left join beneficiary on member_id = benefit_id right join Contribution on contribution_id=member_id where contribution = 5000 and beneficiary = curdate()") or die(mysqli_error($mysqli));

/* pre_r($result); */
?>
<center><h2><u>5000 Contribution</u> </h2></center>
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
<center>

<div id="box">
<?php
            while ($row = $result4->fetch_assoc()):

echo"The member ".$row['firstname']." is the beneficiary of ".$row['derty'];
            endwhile;
                ?>
</div>
<div class="container">
  
    <div class="row">
        <table  class="" style=" font-family: var(--JosefinSans);"  id="table">
            <thead style="color: black; font-family: var(--Philosopher);margin:0;">
                <tr>

                    <!-- <th>FirstName</th>
                    <th>LastName</th>

                    <th colspan="3">Action</th> -->
                </tr>
            </thead>
            <hr>
            <?php
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>

                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td>
                        <div class="action">
                   
                    <a href="upload.php?5500=<?php echo $row ['contribution_id']; ?>"   class="btn btn-success">paid_fine</a><br>
                    <a href="upload.php?Not7=<?php echo $row ['contribution_id']; ?>"   class="btn btn-danger">Not_paid</a>
                  
            </div>
                    </td>

                  

                </tr>
                
            <?php endwhile; ?>

        </table>
                    
                    
        
<?php
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT member_id,contribution_fine, contribution_benefit,lastname, contribution_paidfine, contribution_fine + contribution_amount as damn, firstname,contribution_payment,contribution_amount, benefiter FROM member inner join benefiter on member_id-1=benefiter_id right join Contribution on contribution_id=member_id where contribution_amount=5000 order by benefiter asc ") or die(mysqli_error($mysqli));
$result2 = $mysqli->query("SELECT  sum(contribution_paidfine) as san, sum(contribution_payment) as form,sum(contribution_amount) as contrib FROM Contribution where contribution_amount=5000") or die(mysqli_error($mysqli));
/* pre_r($result); */
?>

<div class="container">

    <div class="row">
        <table  class="" style=" font-family: var(--JosefinSans);"  id="table">
            <thead style="color: black; font-family: var(--Philosopher);margin:0;">
                <tr>
                <th>Benefit_Date</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Contributed</th>
                    <th>Fine</th>
                    <th>Contribution+Fine (to_be_paid)</th>
                    <th>Contributed+fine (paid)</th>
                    <th>Benefit</th>
                   


                </tr>
            </thead>
            <hr>
            <?php
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                <td><?php echo $row['benefiter']?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                  
                    <td><?php echo $row['contribution_payment'] ?></td>
                    <td><?php echo $row['contribution_fine'] ?></td>
                    <td><?php echo $row['damn'] ?></td>
                    <td><?php echo $row['contribution_paidfine'] ?></td>
                    <td><?php echo $row['contribution_benefit']?></td>
                   
                    


                </tr>
            <?php endwhile; ?>
            <?php
            while ($row = $result2->fetch_assoc()):
                ?>
                <tr>
                    <td>Total cotisé</td>
                    <td> </td>
                    <td> </td>
                    <td><?php echo $row['form'] ?></td>
                    <td> </td>
                   <td> <?php echo $row['san'] ?></td>
                   <td> </td>
                </tr>
               
                <?php endwhile; ?>
        </table>
    </div>
   
<script>
    var modal = null
 function flop() {
   if(modal === null) {
     document.getElementById("box").style.display = "block";
     modal = true
   } else {
     document.getElementById("box").style.display = "none";
     modal = null
   }
 }
 </script>
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
