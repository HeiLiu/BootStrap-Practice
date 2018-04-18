<?php
    $sname=$_GET['sname'];
    echo $sname;die();
    require_once('../condb.php');
    $sql="delete from `staff_info` where `sname` =  '$sname' ";
    $result=$pdo->exec($sql);
    if($result){
        header('Location:sala_info.php');
    }
?>