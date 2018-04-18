<?php
    header('Content-type:text/html;charset=utf-8');
    $sname=$_GET['sname'];
    echo $sname;
    require_once('../condb.php');
    $sql="delete from `staff_info` where `sname` =  '$sname' ";
    $result=$pdo->exec($sql);
    if($result){
        header('Location:sala_info.php');
    }
?>