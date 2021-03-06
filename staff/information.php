<?php
    require_once('../check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资讯</title>
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
                <li class="active"><a href="information.php"><span class="glyphicon glyphicon-list"></span> 资讯</a></li>
                <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 校园话题</a></li>
                <li><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
                <li><a href="aboutus.php"><?=$_SESSION['username']?></a></li>
                <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>资讯</h1>
            <h4>互联网的最新动态和资讯、资源等...</h4>
        </hgroup>
    </div>
</div>
<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info1.jpg" alt="资讯一" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>广电总局发布 TVOS2.0 华为阿里参与研发</h4>
                            <p class="hidden-xs">TVOS2.0是在TVOS1.0与华 为 MediaOS 及阿里巴巴 YunOS 融合的基础上，打造的新一代智能电视操作系统。华为主要
                                承担开发工作，内置的电视购物商城由阿里方面负责。
                            </p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row  info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info2.jpg" alt="资讯二" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p class="hidden-xs">苹果明年初有可能对外发布一款经过升级的四英寸手机，相当于iPhone 5s。该手机将会配置苹果在2015年旗舰手机中采用的A9处理器。配置性能如此强大的应用处理器？</p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row  info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info3.jpg" alt="资讯三" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p class="hidden-xs">六家互联网公司（今日头条、美团大众点评网、360、腾讯、微博、小米科技）发布联合声明，呼吁有关运营商打击流量劫持，重视互联网公司被流量劫持，可能导致的严重后果。</p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info1.jpg" alt="资讯一" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>广电总局发布 TVOS2.0 华为阿里参与研发</h4>
                            <p class="hidden-xs">TVOS2.0是在TVOS1.0与华 为 MediaOS 及阿里巴巴 YunOS 融合的基础上，打造的新一代智能电视操作系统。华为主要
                                承担开发工作，内置的电视购物商城由阿里方面负责。
                            </p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row  info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info2.jpg" alt="资讯二" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p class="hidden-xs">苹果明年初有可能对外发布一款经过升级的四英寸手机，相当于iPhone 5s。该手机将会配置苹果在2015年旗舰手机中采用的A9处理器。配置性能如此强大的应用处理器？</p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row  info-content">
                        <div class="col-md-5 col-sm-5 col-xs-5"><img src="../img/info3.jpg" alt="资讯三" class="img-responsive"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p class="hidden-xs">六家互联网公司（今日头条、美团大众点评网、360、腾讯、微博、小米科技）发布联合声明，呼吁有关运营商打击流量劫持，重视互联网公司被流量劫持，可能导致的严重后果。</p>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 info-right hidden-sm hidden-xs">
                <div class="container-fluid">
                    <blockquote>
                        <h2>热门资讯</h2>
                    </blockquote>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info3.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info2.jpg" alt="资讯三" class="img-responsive" style="margin:12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info1.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>广电总局发布 TVOS2.0 华为阿里参与研发</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info3.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info2.jpg" alt="资讯三" class="img-responsive" style="margin:12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info1.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>广电总局发布 TVOS2.0 华为阿里参与研发</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info3.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info2.jpg" alt="资讯三" class="img-responsive" style="margin:12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info1.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>广电总局发布 TVOS2.0 华为阿里参与研发</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info3.jpg" alt="资讯三" class="img-responsive" style="margin: 12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <img src="../img/info2.jpg" alt="资讯三" class="img-responsive" style="margin:12px 0;padding: 0;"></div>
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding:0;">
                            <h4>苹果四寸手机为何要配置强大的A9处理器</h4>
                            <p>admin 15 / 10 / 11</p>
                        </div>
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