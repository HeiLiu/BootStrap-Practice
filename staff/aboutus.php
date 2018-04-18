<?php
    require('../check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
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
                <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                <li><a href="information.php"><span class="glyphicon glyphicon-list"></span> 资讯</a></li>
                <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 校园话题</a></li>
                <li><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
                <li class="active"><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
                <li><a href="#"><?=$_SESSION['username']?></a></li>
                <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>

    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>关于</h1>
            <h4>企业内训的最新动态、资源等...</h4>
        </hgroup>
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="list-group">
                    <a href="#1" class="list-group-item">1.机构简介</a>
                    <a href="#2" class="list-group-item">2.加入我们</a>
                    <a href="#3" class="list-group-item">3.联系方式</a>
                </div>
            </div>
            <div class="col-md-9 about-content">
                <a name="1"></a>
                <h3>企业简介</h3>
                <p>
                    南昌青山电子有限公司在IT外包领域有着与超过100家企业客户保持长期良好的IT外包合作关系，拥有长达5年之久的IT外包服务经验。专业的技术，周到的服务，合理的价格为企业提供全方位的IT外包服务。如今“江西IT外包服务网”依靠专业技术背景与多年企业IT外包维护经验积累，已经形成一套有的企业IT服务标准，是企业客户IT外包服务的首选。   </p><p>  “南昌IT外包服务网”为企业提供专业的IT外包服务，服务内容包括IT外包服务，系统管理优化，电脑维修外包，电脑维护外包，企业IT服务外包，网络维护外包，网络优化，打印机维修维护外包，网络工程，电话交换机外包，企业IT产品采购，数据恢复，企业邮局，网站设计，企业IT人才外包，综合布线，门禁系统，企业宽带申请，企业IP电话申请等。欢迎您来电咨询，我们将热情为您服务。</p>
              </p>
                <a name="2"></a>
                <h3>加入我们</h3>
                <p>
                    网络已深刻改变着人们的生活，本地化生活服务市场前景巨大，我们公司每个团队坚信本地化生活服务与互联网的结合将会成就一家梦幻的公司，我们脚踏实地的相信梦 想，我们相信你的加入会让生活半径更可能成为那家梦幻公司！生活半径人有梦想，有魄力， 强执行力，但是要实现这个伟大的梦想，需要更多的有创业精神的你一路前行。公司将提供 有竞争力的薪酬、完善的福利（五险一金）、期权、广阔的上升空间。只要你有能力、有激 情、有梦想，愿意付出，愿意与公司共同成长，请加入我们
                </p>
                <a name="3"></a>
                <h3>联系方式</h3>
                <p>地址：江西省南昌市青山湖区广兰大道 418 号</p>
                <p>邮编：346400</p>
                <p>电话：010-88888888</p>
                <p>传真：010-66666666</p>
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