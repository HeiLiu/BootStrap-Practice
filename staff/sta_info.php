<?php
    require_once('../check_login.php');
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
            <a href="index.php" class="navbar-brand logo"><img src="../img/logo.png" alt=""></a>
            <button type="button" class="btn btn-default navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 校园话题</a></li>
            <li><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
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
            <h1>个人工资信息</h1>
            <h4>企业职工每个人的个人工资信息的维护要做到公平、公正...</h4>
        </hgroup>
    </div>
</div>
<div class="case">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="../img/case1.jpg" alt="中国移动">
                    <div class="caption">
                        <h4>中国移动通信</h4>
                        <P>参与了本机构的总裁管理培训课程，学员反馈意见良好.</P>
                    </div>
                </div>
            </div>

        </div>
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