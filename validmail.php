<?php
$email = $_POST['email'];
//$email = 'jasiameher@gmail';
 if(strpos($email , '@')){
    
     if(strpos($email , '.com')){
        echo "This is valid email";
     }else{
        echo "This is invalid email";
     }
 }else{
    echo " pls add @ sign";
 }
