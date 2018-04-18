<?php
    header('Content-type:text/html;charset=utf-8');
        $gname=$_POST['gname'];
        echo $gname;
        $gnum=$_POST['gnum'];
        $gbasemon=$_POST['gbasemon'];
        $gjinmon=$_POST['gjinmon'];
        $gtemon=$_POST['gtemon'];
    require_once('../condb.php');
//    $sql="select * from gang_info where gname='$gname'";
//    $rs=$pdo->query($sql);
//    $result=$rs->fetchAll(PDO::FETCH_ASSOC);
    $sql="update gang_info set `gbasemon`='$gbasemon',`gjinmon`='$gjinmon',`gtemon`='$gtemon' where `gname`='$gname'";
//    var_dump($sql);
    $result=$pdo->exec($sql);
    var_dump($result);
    header('Location:sala_info.php');
?>