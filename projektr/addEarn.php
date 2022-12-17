<?php
 $db = mysqli_connect("localhost","root","","sheepurhack");

 $ile = $_POST['ile'];
 $nazwa = $_POST['nazwa'];

 mysqli_query($db,"INSERT INTO `earn`(ile, nazwa) VALUES ('$ile','$nazwa');");
 header("Location: index.php");
?>