<?php
$today=date("d-m-Y");
$next= date('d-m-Y', strtotime($today. ' + 650 days'));
$today3=date("d-m-Y");
for($i=1; $i<=30; $i++)
{
    $repeat = strtotime("+7 day",strtotime($today3));
    $today3 = date('d-m-Y',$repeat);
  
}
?>
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
    background-color: green;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 221);
        }

        #delete{
            background-color: orangered;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226);
        }

        #view{
            background-color: red;
            padding:5px 15px;
            border-radius:6px;
            color:white;
            border:1px solid rgb(31, 161, 226);
        }
 
        #box5 {
    width: 30%;
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

#box5 span {
    color: black;
    font-size: 150%;
    display: block;
    margin: 20px 0;
    width: fit-content;
}

#box5 a {
    font-size: 150%;
    width: 35%;
    color: white;
    padding: 10px 20px;
    cursor: grab;
    background: #DD2F62;
    display: inline-block;
    border-radius: 2px solid #000;
}


        </style>
    </head>
    <body>
    
<center><h2><u>2000 Contribution results</u> </h2></center>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT member_id, contribution_fine, contribution_benefit,lastname, contribution_paidfine, contribution_fine + contribution_amount as damn, firstname,contribution_payment,contribution_amount, beneficiary FROM member inner join beneficiary on member_id=benefit_id right join Contribution on contribution_id=member_id where contribution_amount=2000 order by beneficiary asc") or die(mysqli_error($mysqli));
$result2 = $mysqli->query("SELECT  sum(contribution_paidfine) as san, sum(contribution_payment) as form,sum(contribution_amount) as contrib FROM Contribution where contribution_amount=2000") or die(mysqli_error($mysqli));
/* pre_r($result); */
?>
<center>
<div class="container">

    <div class="row">
        <table  class="" style=" font-family: var(--JosefinSans);"  id="table">
            <thead style="color: black; font-family: var(--Philosopher);margin:0;">
                <tr>
                <th>Benefit_Date</th>
                    <th>FirstName</th>
                    <th>lastName</th>
                    <th>Contributed</th>
                    <th>Fine</th>
                    <th>Contribution +Fine (to_be_paid)</th>
                    <th>Contributed +fine (paid)</th>
                    <th>Benefit</th>
                 


                </tr>
            </thead>
            <hr>
            <?php
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                <td><?php echo $row['beneficiary']?></td>
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
                    <td></td>
                    <td><?php echo $row['form'] ?></td>
                    <td> </td>
                   <td> <?php echo $row['san'] ?></td>
                   <td> </td>
                </tr>
               
                <?php endwhile; ?>
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
        <center>
        <?php
require_once "file.php";

$directory ='files';
if($handle = opendir($directory.'/')){
    while($file = readdir($handle)){
        if($file!= '.' && $file!= '..'){
           echo '<a href="' . $directory .'/' . $file .'">' . $file . '</a> <br>';
        }
    }
}
 ?>
 </center>
    </body>
</html>
