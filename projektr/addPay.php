<?php
 $db = mysqli_connect("localhost","root","","sheepurhack");

 $ile = $_POST['ile'];
 $nazwa = $_POST['nazwa'];
 $kategoria = $_POST['kategoria'];

 mysqli_query($db,"INSERT INTO `pay`(`cena`, `nazwa`, `kategoria`) VALUES ('$ile','$nazwa','$kategoria');");
 header("Location: index.php");
?>