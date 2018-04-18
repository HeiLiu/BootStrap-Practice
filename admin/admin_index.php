<?php
    require('../check_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>青山电子科技</title>
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
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 留言板</a></li>
                <li><a href="sta_info.php"><span class="glyphicon glyphicon-list"></span> 职工信息</a></li>
                <li><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
                <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>

    </div>
</nav>
<!--轮播图-->
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active" style="background:#223240"><img src="../img/slide1_1.png" alt="第一张">
            <div class="carousel-caption">
                <h3>The First picture</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempore!</p>
            </div>
        </div>
        <div class="item" style="background:#F5E4DB"><img src="../img/slide2_1.png" alt="第二张">
            <div class="carousel-caption">
                <h3>The Second picture</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, iste!</p>
            </div>
        </div>
        <div class="item" style="background:#DC292C"><img src="../img/slide3_1.png" alt="第三张">
            <div class="carousel-caption">
                <h3>The Third picture</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit!</p>
            </div>
        </div>
    </div>
    <!--另一种自带的居中方法-->
    <!--<a href="#myCarousel" data-slide="prev" class="carousel-control left">&lsaquo;</a>-->
    <!--<a href="#myCarousel" data-slide="next" class="carousel-control right">&rsaquo;</a>-->
    <a href="#myCarousel" data-slide="prev" class="carousel-control left">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#myCarousel" data-slide="next" class="carousel-control right">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!--内容部分-->
<div class="content">
    <div class="container">
        <h2 class="header-h2">「 为什么选择青山电子 」</h2>
        <p class="header-p">强大的师资力量，完美的实战型管理课程，让您的企业 实现质的腾飞！</p>
        <div class="row">
            <div class="col-md-6 col">
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#"><img src="../img/tab1-1.png" alt="特色一" class="media-object"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">课程内容</h4>
                        <p class="others-p">其他：不知名的高校老师编写！</p>
                        <p>我们：知名企业家、管理学大师联合编写的具有实现性教材！</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col">
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#"><img src="../img/tab1-2.png" alt="特色二" class="media-object"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">师资力量</h4>
                        <p class="others-p">其他：非欧美正牌大学毕业的、业界没有知名度的讲师！</p>
                        <p>我们：美国哈佛、耶鲁等世界一流高校、享有声誉的名牌专家！</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col">
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#"><img src="../img/tab1-3.png" alt="特色三" class="media-object"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">课时安排</h4>
                        <p class="others-p">其他：无法保证上课效率、没有时间表，任务无法完成！</p>
                        <p>我们：保证正常的上课效率、制定一张时间表、当天的任务当天完成！</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col">
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#"><img src="../img/tab1-4.png" alt="特色四" class="media-object"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">服务团队</h4>
                        <p class="others-p">其他：社会招聘的、服务水平参差不齐的普通员工！</p>
                        <p>我们：内部培养、经受过良好高端服务培训的高标准员工！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content2">
    <div class="container">
        <div class="row row1">
            <div class="col-md-6 col-sm-6 float-image">
                <img src="../img/tab2.png" class="img-responsive center-block" alt="asasa">
            </div>
            <div class="col-md-6 col-sm-6 text float-text">
                <h3>强大的学习体系</h3>
                <p>经过管理学大师层层把关、让您的企业突飞猛进。</p>
            </div>
        </div>
    </div>
</div>
<div class="content3">
    <div class="container">
        <div class="row row2">
            <div class="col-md-6 col-sm-6">
                <img src="../img/tab3.png" class="img-responsive center-block" alt="asa">
            </div>
            <div class="col-md-6 col-sm-6 text">
                <h3>完美的管理方式</h3>
                <p>最新的管理培训方案，让您的企业赶超同行。</p>
            </div>
        </div>
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
        $('#myCarousel').carousel({interval:4000});//轮播图两秒自动循环播放
        /*
        $(window).onload(aSize()).resize(aSize());
        function aSize (){ //图片切换链接居中,页面加载、缩放时调用
            var aSize=$('.carousel-inner img').eq(0).height() ||$('.carousel-inner img').eq(1).height()
                ||$('.carousel-inner img').eq(2).height();
            $('.carousel-control').css('line-height',aSize+'px');
        }*/
//        设置内容区域文字垂直居中
        var containerHeight= $('.content2').height();
        var imgHeight=$('.content2 img').height()/2;
        $('.content2 .text').css('margin-top',containerHeight-imgHeight-40 +'px');

        var containerHeight1= $('.content3').height();
        var imgHeight1=$('.content3 img').height()/2;
        $('.content3 .text').css('margin-top',containerHeight1-imgHeight1-40 +'px');
    })

</script>
</body>
</html>