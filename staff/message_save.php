<?php
    session_start();
    require_once('../condb.php');
    header('Content-type:text/html;charset=utf-8');
    echo $_SESSION['username'];
    $mwho=$_SESSION['username'];
    $mtitle=$_POST['mtitle'];
    $mcontent=$_POST['mcontent'];
     ini_set('date.timezone','Asia/Shanghai');           //修改时区 （不改默认为伦敦）
     $mtime = date('Y-m-d H:i:s',time());           //获取当前系统时间
    $sql="insert into message set mtitle='$mtitle',mcontent='$mcontent',mwho='$mwho',mtime='$mtime'";
    var_dump($sql);
    $result=$pdo->exec($sql);
    var_dump($result);
    header('Location:message.php');
?>