<?php
 $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");

 $ile = $_POST['ile'];
 $nazwa = $_POST['nazwa'];

 mysqli_query($db,"INSERT INTO `zyski`(wartosc, nazwa) VALUES ('$ile','$nazwa');");
 header("Location: index.php");
?>