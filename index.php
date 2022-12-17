<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fineanswer - An Answer for your Finances</title>
    <link  rel="stylesheet" href="index.css?v=<?php echo time() ?>">
    <link rel="icon" href="favicon.png">

    <script src="index.js" ></script>
</head>
<body>
    <div id="top">
        <img src="favicon.png" style="padding-left: 5px; height: 45px; width:auto;" alt="logo">

    </div>
    <div id="earn">
        <h1>TWÓJ PRZYCHÓD</h1>
        <div id="earnA">
            <div >
                <?php
                    include "earnings.php";
                ?>
            </div>
        <div>
        
        </div>
       
        
        </div>

    </div>
    <div id="pay">
        <h1>TWOJE WYDATKI</h1>
       <div class="category">
            <h2>Rachunki</h2>
            <?php
                include "pay.php";

                display("rachunki");
            ?>
             <div>
       
        </div>
        </div>

        <div class="category">
            <h2>Jedzenie</h2>
            <?php
            

                display("jedzenie");
            ?>
             <div>
       
        </div>
        </div>

        <div class="category">
            <h2>Rozrywka</h2>
            <?php
        

                display("rozrywka");
            ?>
             <div>
       
        </div>
        </div>

        <div class="category">
            <h2>Inne</h2>
            <?php
         

                display("inne");
            ?>
             <div>
        
        </div>
        </div>
    </div>
    
   
    <div id="mid">
        <div id="save">
           

            <?php
                if(isset($_POST['dodaj'])){

                    $name = $_POST['nazwa'];
                    $value = $_POST['wartosc'];
                    $date = $_POST['data'];

                    $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");
                   

                    mysqli_query($db,"INSERT INTO dlugi (nazwa,wartosc,ilosc_splacona,deadline) VALUES ('$name','$value',0,'$date')");
                    header("Refresh: 0");
                    mysqli_close($db);
                }
            ?>


          
        </div>
        
        

        <?php

            $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");
               

                $q = mysqli_query($db,"SELECT * FROM dlugi");
                $suma = 0;
                    for($i = 0; $i < mysqli_num_rows($q); $i++)
                    {
                        $tab = mysqli_fetch_array($q);
                        $suma+=$tab["rata"];

                        ?>
                                <div class="title">
                                                                <h4><?php echo $tab["nazwa"] ?></h4>
<<<<<<< HEAD
                                <div><?php echo round($tab["ilosc_splacona"]/$tab["wartosc"]*100);?>% </div>
=======
                                <div><?php echo "<b>".round($tab["ilosc_splacona"]/$tab["wartosc"]*100);?>%</b> <?php echo " (".$tab["ilosc_splacona"]." PLN / ".$tab['wartosc']." PLN)"; ?></div>
>>>>>>> b1ca0b0 (halo maciek nie spij)
                                <div>
                            <div  class="debt_box">
                                <div style="width:<?php echo round($tab["ilosc_splacona"]/$tab["wartosc"]*100);?>%" class="progress"></div>  </div>

                          

                                <?php
                            }

               
                            $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");

                            $pay = 0;
                            $res = mysqli_query($db,"SELECT * FROM wydatki ");
                               while($a = mysqli_fetch_row($res))
                               {
                                    $pay+=$a[2];
                               }
                               $earn = 0;
                               $res = mysqli_query($db,"SELECT * FROM zyski");
                                  while($a = mysqli_fetch_row($res))
                                  {
                                       $earn+=$a[2];
                             
                                  }

        ?>     
        
        <h1 class="zest">Zestawienie finansowe</h1>
        <div class="summary">
           <div class="graph" style="position:relative;right:300px">

            <div style="width:<?php echo round($pay/$earn*100);?>%;height:50px;background-color:rgba(255,0,0,0.5);"><?php echo round($pay/$earn*100);?>% - OPŁATY</div>
            <div style="width:<?php echo round($suma/$earn*100);?>%;height:50px;background-color:rgba(255,165,0,0.5);"><?php echo round($suma/$earn*100);?>% - SPŁATA</div>
            <div style="width:<?php echo round(($earn-$suma-$pay)/$earn*100);?>%;height:50px;background-color:rgba(0,163,0,0.5);"><?php echo round(($earn-$suma-$pay)/$earn*100);?>% - OSZCZĘDNOŚĆ</div>
             </div>
             <div class="right">
             <p>
                Wydałeś <?php echo $pay; ?> PLN ze swojego budżetu.
                                </p>
             <p>
                W tym miesiącu potrzebujesz mieć <?php echo $suma; ?> PLN na spłatę rat.
                                </p>
                                <p>
                <?php if($earn-$pay>0) echo "Udało ci się zaoszczędzić ".$earn-$pay-$suma." PLN."; else echo "Wydałeś za dużo o ".$pay+$suma-$earn." PLN musisz zredukować koszty niektórych twoich wydatków" ?>
                                </p>
                                </div>         
                
                    </div>
 

</body>
</html>