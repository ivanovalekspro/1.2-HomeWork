<?php
$x = rand(0,100);
echo "Число $x <br>";

$num1 = 1;
$num2 = 1;
$num3 = 0;

while ($num1 < $x) {
	$num3 = $num1;
	$num1 = $num1 + $num2;
	$num2 = $num3;
}
if ($num1 > $x) {
	echo "Задуманное число НЕ входит в числовой ряд !!!";
}
else{
	echo "Задуманное число  ВХОДИТ в числовой ряд !!!";
}
?>