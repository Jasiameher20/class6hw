<?php
$input = $_POST['traingle'];
for($i=1; $i<=$input; $i++){
   echo str_repeat("*", $i) . "<br>";
 }

 for($i=$input;$i>=1;$i--){
  for($j=1;$j<=$i;$j++){
      echo'*';
  }
  echo"<br>";
}