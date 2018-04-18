<?php
//连接数据库文件
     header('Content-type:text/html;charset=utf-8');
     try {
     	$dsn =  'mysql:host=localhost;dbname=staffmanager';
     	$pdo = new PDO($dsn,'root','');
     	$pdo->exec('set names utf8');
//     	echo "连接成功";
     } catch (PODException $e) {
     	echo 'error:'.$e->getMessage();
     	exit();
     }

?>