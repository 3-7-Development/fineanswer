<?php
 $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");

 $ile = $_POST['ile'];
 $nazwa = $_POST['nazwa'];
 $kategoria = $_POST['kategoria'];

 mysqli_query($db,"INSERT INTO `wydatki`(`wartosc`, `nazwa`, `kategoria`) VALUES ('$ile','$nazwa','$kategoria');");
 header("Location: index.php");
?>