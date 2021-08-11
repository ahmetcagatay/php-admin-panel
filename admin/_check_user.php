<?php
include('connect.php');
$email = $_GET["email"];

$result = select_query("SELECT * FROM members WHERE email='$email'");
echo $result;
exit;
?>