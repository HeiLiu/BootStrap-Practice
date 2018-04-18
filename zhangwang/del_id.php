<?php
     require_once('PDO.php');
     $sid=$_GET['sid'];		//获取要删除的学号sid
     $sql = "delete from student where sid={$sid}";
     $result = $pdo->exec($sql);
     if($result!==false){
     	header('Location:del.php');	//删除后跳转回之前页面
     }

?>