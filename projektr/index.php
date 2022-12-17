<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

    <script src="index.js" ></script>
</head>
<body>
    <div id="top">

    </div>
    <div id="earn">
        <h1>Przychód</h1>
        <div id="earnA">
            <div >
                <?php
                    include "earnings.php";
                ?>
            </div>
        <div>
        <p class="button" onclick="add(this)">Dodaj</p>
        <div class="add invisible">
        <form method="POST" action="addEarn.php"> <input type="number" name="ile"><input name="nazwa" type="text"><input type="submit"></form> 
        </div>
        <p class="button invisible" onclick="add(this)">Anuluj</p>
        </div>
       
        
        </div>

    </div>
    
    <div id="pay">

       <div class="category">
            <h1>Rachunki</h1>
            <?php
                include "pay.php";

                display("rachunki");
            ?>
             <div>
        <p class="button" onclick="add(this)">Dodaj</p>
        <div class="add invisible">
        <form method="POST" action="addPay.php"><input type="hidden" name="kategoria" value="rachunki"> <input type="number" name="ile"><input name="nazwa" type="text"><input type="submit"></form> 
        </div>
        <p class="button invisible" onclick="add(this)">Anuluj</p>
        </div>
        </div>

        <div class="category">
            <h1>Jedzenie</h1>
            <?php
            

                display("jedzenie");
            ?>
             <div>
        <p class="button" onclick="add(this)">Dodaj</p>
        <div class="add invisible">
        <form method="POST" action="addPay.php"><input type="hidden" name="kategoria" value="jedzenie"> <input type="number" name="ile"><input name="nazwa" type="text"><input type="submit"></form> 
        </div>
        <p class="button invisible" onclick="add(this)">Anuluj</p>
        </div>
        </div>

        <div class="category">
            <h1>Rozrywka</h1>
            <?php
        

                display("rozrywka");
            ?>
             <div>
        <p class="button" onclick="add(this)">Dodaj</p>
        <div class="add invisible">
        <form method="POST" action="addPay.php"><input type="hidden" name="kategoria" value="rozrywka"> <input type="number" name="ile"><input name="nazwa" type="text"><input type="submit"></form> 
        </div>
        <p class="button invisible" onclick="add(this)">Anuluj</p>
        </div>
        </div>

        <div class="category">
            <h1>Inne</h1>
            <?php
         

                display("inne");
            ?>
             <div>
        <p class="button" onclick="add(this)">Dodaj</p>
        <div class="add invisible">
        <form method="POST" action="addPay.php"><input type="hidden" name="kategoria" value="inne"> <input type="number" name="ile"><input name="nazwa" type="text"><input type="submit"></form> 
        </div>
        <p class="button invisible" onclick="add(this)">Anuluj</p>
        </div>
        </div>
    </div>
    
   
    <div id="mid">
        <div id="save">
            <form action="" method="POST">
            <h2>Dodaj Długi do spłacenia </h2>
            <input type="number" name="wartosc"><input type="text" name="nazwa"><input type="date" name="data"><button type="submit" name="dodaj">dodaj</button>
            </form>

            <?php
                if(isset($_POST['dodaj'])){

                    $name = $_POST['nazwa'];
                    $value = $_POST['wartosc'];
                    $date = $_POST['data'];

                    $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");
                    if(mysqli_connect_errno()){
                        echo("Wystąpił problem z bazą");
                    }

                    mysqli_query($db,"INSERT INTO dlugi (nazwa,wartosc,ilosc_splacona,deadline) VALUES ('$name','$value',0,'$date')");
                    header("Refresh: 0");
                    mysqli_close($db);
                }
            ?>


            <p></p>
        </div>
        <button onclick="">analyze</button><br><br>
        

        <?php

            $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");
                if (!mysqli_connect_errno()) 
                {
                    echo "<h1 class='messageToUser'>Cannot connect to the database</h1>";
                }

                $q = mysqli_query($db,"SELECT * FROM dlugi");
                
                    for($i = 0; $i < mysqli_num_rows($q); $i++)
                    {
                        $tab = mysqli_fetch_array($q);

                        ?>
                                <div class="debt_display">
                                <div class="display_percentage">
                                           <?php echo $tab['ilosc_splacona']."zł / ".$tab['wartosc']."zł";?>
                                    </div>
                                    
                                    <div class="display_title">
                                    <h3><?php echo $tab['nazwa']; ?></h3>
                                    <br>
                                    <h5>Deadline: <?php echo $tab['deadline']; ?></h5>
                                    </div>
                                    <div style="width: 
                                    
                                    <?php 
                                        $a = $tab['wartosc'];
                                        $b = $tab['ilosc_splacona'];
                                        $percent = $b/$a * 750;
                                        echo($percent);
                                    ?>px" class="progress_bar">
                                        
                                    </div>

                                    
                                </div>
                                <?php
                    }

        ?>

</body>
</html>