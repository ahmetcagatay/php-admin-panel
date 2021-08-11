<?php
include('connect.php');
$id = $_GET["id"];
$email = $_GET["email"];
$access = $_GET["access"];
$result = run_query("UPDATE members SET access = '".$access."', email = '".$email."' WHERE id='".$id."'");

echo $result;
exit;
?>