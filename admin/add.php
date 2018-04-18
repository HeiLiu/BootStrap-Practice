<?php
    header('Content-type:text/html;charset=utf-8');
    $gnum=$_POST['gnum'];
    $gname=$_POST['gname'];
    $gbasemon=$_POST['gbasemon'];
    $gjinmon=$_POST['gjinmon'];
    $gtemon=$_POST['gtemon'];
    require_once('../condb.php');

    $sql="insert into gang_info(`gnum`,`gname`,`gbasemon`,`gjinmon`,`gtemon`) values('$gnum','$gname','$gbasemon','$gjinmon','$gtemon')";
    $result=$pdo->exec($sql);
    if($result){
       echo '<script>alert("添加成功");location.href="sala_info.php";</script>' ;
    }else{
       echo '<script>alert("添加失败");location.href="sala_info.php";</script>' ;
       exit();
    }