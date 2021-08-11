<?php
include('connect.php');
$id = $_GET["id"];
$result = run_query("DELETE FROM members WHERE id='".$id."'");

echo $result;
exit;
?>