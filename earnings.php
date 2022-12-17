<?php
 $db = mysqli_connect("localhost", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");


 $res = mysqli_query($db,"SELECT * FROM zyski");
    while($a = mysqli_fetch_row($res))
    {
        echo "<div class='earnings'><h3>".$a[1]."</h3><div>".$a[2]."</div></div>";
    }
?>