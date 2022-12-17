<?php
function display($a)
{
    $db = mysqli_connect("localhost","root","","sheepurhack");


 $res = mysqli_query($db,"SELECT * FROM pay WHERE kategoria LIKE '$a'");
    while($a = mysqli_fetch_row($res))
    {
        echo "<div class='payments'><h3>".$a[1]."</h3><div>".$a[0]."</div></div>";
    }
}
?>