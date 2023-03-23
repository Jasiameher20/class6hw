
<?php
$a = $_POST['Num1'];
$b = $_POST['Num2'];
$c = $_POST['Num3'];
//$a = 500;
//$b = 1000;
//$c = 6000;

 if ($a > $b && $a > $c) 
 {
    echo "$a is greater number";
 }
 elseif($b > $a && $b > $c)
 {
    echo "$b is greater number";
 }
 else
 {
     echo "$c is greater number";
 }