<?php
$msg = $_POST['massege'];
 //$msg = 'paragraph';


 if ((strlen($msg )>=4) && (strlen($msg )<=10))
 {
   echo "The string is acceptable";
 }else{
 echo "The string is not acceptable";
 }