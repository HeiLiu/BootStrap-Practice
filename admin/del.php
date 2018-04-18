<?php
    $gname=$_GET['gname'];
    echo $gname;
    require_once('../condb.php');
    $sql="delete from `gang_info` where `gname` =  '$gname' ";
    $result=$pdo->exec($sql);
    if($result){
        header('Location:sala_info.php');
    }
?>