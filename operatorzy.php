
<?php
$a = 10;
$b = 5;

var_dump($a > $b);
echo "<br>";

var_dump($a == $b);
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a >= 10);
echo "<br>";

var_dump($a > 0 && $b > 0);
echo "<br>";

var_dump($a > 20 || $b == 5);
echo "<br>";

var_dump(!($a == $b));
?>
#bool(true)
#bool(false)
#bool(true)
#bool(true)
#bool(true)
#bool(true)
#bool(true)
