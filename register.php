<?php
    header('Content-type:text/html;charset=utf-8');
    echo "<h1>注册页面</h1>";
     require('condb.php');
     $pdo->exec('set names utf8');
     $sql="insert into login(`lname`,`lpwd`) values('admin','admin')";
     $result=$pdo->exec($sql);
     var_dump($result);
?>