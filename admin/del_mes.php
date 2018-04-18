<?php
    $mtitle=$_GET['mtitle'];
    echo $mtitle;
    require_once('../condb.php');
    $sql="delete from `message` where `mtitle` =  '$mtitle' ";
    $result=$pdo->exec($sql);
    if($result){
        header('Location:message.php');
    }
?>