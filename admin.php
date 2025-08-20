<?php

$username = "RM13";
$password  = "secret1234";
$storepassword = "secret123";
$isloggedin = false;

if($password === $storepassword){
    echo"Welcome back, $username!!! <br >"; 
    echo"You have succesfully logged in.<br >";

    $isloggedin = true;
    $lastlogin = date(format: "Y-m-d H:i:s");

    echo "last login: $lastlogin <br>";

}
echo "session status".($isloggedin?"active": "inactive")."<br>";



$orderTotal = 150.

?>