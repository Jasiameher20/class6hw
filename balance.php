<?php
$withdraw = $_POST['balance'];
$savings =100000;
//$withdraw=20000;
if($withdraw<=$savings){
    $Requiredbalance=$savings-$withdraw;
    echo" The balance is: $Requiredbalance";
}
else{
    echo" Balance is short";
}