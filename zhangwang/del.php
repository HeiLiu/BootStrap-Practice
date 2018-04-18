<?php
$gname=$_GET['gname'];
echo $gname;die();
require_once('../condb.php');
$sql="delete from gang_info where gname={$gname}";
if($pdo->exec($sql)){
	header('Location:admin_gang.php');
}
?>