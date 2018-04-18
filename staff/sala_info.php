<?php
    require_once('../check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>工资信息</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="shortcut icon" href="../img/100du.ico">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<nav class="nan navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand logo"><img src="../img/logo.png" alt=""></a>
            <button type="button" class="btn btn-default navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 校园话题</a></li>
            <li class="active"><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
            <li><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
            <li><a href="#"><?=$_SESSION['username']?></a></li>
            <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>工资信息</h1>
            <h4>业精于勤，荒于嬉；行成于思，毁于随...</h4>
        </hgroup>
    </div>
</div>
<div class="case">
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
        <thead>
        <caption><h4 style="display:inline-block;"><?=$_SESSION['username']?></h4>的工资信息表</caption>
           <tr class="success">
              <th>岗位编号</th>
              <th>岗  位</th>
              <th>基本工资</th>
              <th>普通津贴</th>
              <th>特殊津贴</th>
              <th>总&nbsp;&nbsp;计</th>
           </tr>
        </thead>
        <tbody>
        <?php
            require_once('../condb.php');
            $sname=$_SESSION['username'];
//            $sql="select * from staff_info where `sname` = $sname";
//            $sql="select * from gang_info ";
            //进行多表查询用
            $gnum=$_SESSION['gnum'];
            $sql="SELECT * FROM gang_info WHERE gnum = $gnum ";
            $rs=$pdo->query($sql);
//            var_dump($rs);
//            die();
            $list=$rs->fetchAll(PDO::FETCH_ASSOC);
        //    var_dump($list);
           foreach ($list as $key => $value) {
            ?>
            <tr>
               <td><?=$value['gnum']?></td>
               <td><?=$value['gname']?></td>
               <td><?=$value['gbasemon']?></td>
               <td><?=$value['gjinmon']?></td>
               <td><?=$value['gtemon']?></td>
               <td><?=$value['gtemon']+$value['gjinmon']+$value['gbasemon']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</div>
<footer id="footer">
    <footer class="container">
        <p>企业管理 | 合作事宜 | 版权投诉</p>
        <p>赣 ICP 备 12345678. © 2005-2018 企业职工网. Powered by ECUT.</p>
    </footer>
</footer>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script>
    $(function () {

    });
</script>
</body>
</html>