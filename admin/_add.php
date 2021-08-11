<?php
include('connect.php');
if ($_GET["email"] || $_GET["password"]){
    $email = $_GET["email"];
    $crypto_password = md5($_GET["password"]);
    $access = $_GET["access"];

    $result = run_query("INSERT INTO members (email, password, access) 
    VALUES ('$email', '$crypto_password', '$access')");
    
    echo $result;
}
exit;
?>