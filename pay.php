<?php
function display($a)
{
    $db = mysqli_connect("139.162.177.109", "syh37DevUser", "Th!s!sB3stP4ssw0rd", "sheepurhack");


 $res = mysqli_query($db,"SELECT * FROM wydatki WHERE kategoria LIKE '$a'");
    while($a = mysqli_fetch_row($res))
    {
        echo "<div class='payments'><h3>".$a[0]."</h3><div>".$a[1]."</div></div>";
    }
}
?>