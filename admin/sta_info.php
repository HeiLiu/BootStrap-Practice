<?php
    require('../check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>职工信息</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="shortcut icon" href="../img/100du.ico">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<nav class="nan navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="admin_index.php" class="navbar-brand logo"><img src="../img/logo.png" alt=""></a>
            <button type="button" class="btn btn-default navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 留言板</a></li>
            <li class="active"><a href="information.php"><span class="glyphicon glyphicon-list"></span> 职工信息</a></li>
            <li><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
            <li><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
            <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>职工个人信息</h1>
            <h4>企业职工每个人的个人工资信息的维护要做到公平、公正...</h4>
        </hgroup>
    </div>
</div>
<div class="case">
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
                <thead>
                <caption>职工信息表</caption>
                   <tr class="info">
                      <th>职工号</th>
                      <th>姓  名</th>
                      <th>性  别</th>
                      <th>生  日</th>
                      <th>岗位编号</th>
                      <th>工作年限</th>
                      <th>操&nbsp;&nbsp;作</th>
                   </tr>
                </thead>
                <tbody>
                <?php
                    require_once('../condb.php');
                    $sql="select * from staff_info ";
                    $rs=$pdo->query($sql);
                    $list=$rs->fetchAll(PDO::FETCH_ASSOC);
                   foreach ($list as $key => $value) {
                    ?>
                    <tr>
                       <td><?=$value['snum']?></td>
                       <td><?=$value['sname']?></td>
                       <td><?=$value['ssex']?></td>
                       <td><?=$value['sbir']?></td>
                       <td><?=$value['gnum']?></td>
                       <td><?=$value['stime']?> 年</td>
                       <td><a href="del1.php ? sname=<?=$value['sname']?>">删除</a></td>
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
        <p>赣 ICP 备 12345678. © 2005-2018 青山电子科技. Powered by ECUT.</p>
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