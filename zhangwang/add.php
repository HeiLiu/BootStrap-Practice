<?php
    header('Content-type:text/html;charset=utf-8');
    $gnum=$_POST['gnum'];
    $gname=$_POST['gname'];
    $gbasemon=$_POST['gbasemon'];
    $gjinmon=$_POST['gjinmon'];
    $gtemon=$_POST['gtemon'];
    $staff_info_id=$_POST['staff_info_id'];
    require_once('../condb.php');

    $sql="insert into gang_info(gnum,gname,gbasemon,gjinmon,gtemon,staff_info_id) values('{$gnum}','{$gname}', '{$gbasemon}','{$gjinmon}','{$gtemon}','{$staff_info_id}')";
    if($pdo->exec($sql)){
       echo '添加成功！';
    }else{
       echo '<script>alert("添加失败");history.back();</script>' ;
       exit();
    }