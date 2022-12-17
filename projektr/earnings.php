<?php
 $db = mysqli_connect("localhost","root","","sheepurhack");


 $res = mysqli_query($db,"SELECT * FROM earn");
    while($a = mysqli_fetch_row($res))
    {
        echo "<div class='earnings'><h3>".$a[1]."</h3><div>".$a[0]."</div></div>";
    }
?>