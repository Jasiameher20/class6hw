<?php
$input = $_POST['factorial'];

$result = 1;
 for($i = 1; $i<= $input; $i++){
$result = $result * $i;
}

echo"<br> Factorial of $input is : $result";