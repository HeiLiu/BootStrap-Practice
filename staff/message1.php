<?php
    require_once('../check_login.php');
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
                <li><a href="message.php"><span class="glyphicon glyphicon-fire"></span> 留言板</a></li>
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
<div class="case">
<div class="container">
     <?php
         require_once('../condb.php');
         $sql="SELECT * FROM message";
         $rs=$pdo->query($sql);
         $list=$rs->fetchAll(PDO::FETCH_ASSOC);
        foreach ($list as $key => $value) {
     ?>
     <div class="container-fluid">
         <div class="row info-content clearfix">
              <div class="col-md-2 col-sm-2 col-xs-2" style="margin-top:10px"><img src="../img/info1.jpg" alt="资讯一" class="img-responsive"></div>
                  <div class="col-md-10 col-sm-10 col-xs-10">
                      <h4 style="float:left;"><?=$value['mtitle']?></h4>
                      <p class="hidden-xs" style="clear:both;">
                       <span style="font-weight:bold;"><?=$value['mwho']?>:</span><?=$value['mcontent']?>
                      </p>
                      <p style="float:right;"><?=$value['mtime']?></p>
                  </div>
              </div>
         </div>
      <?php
          }
      ?>
    </div>
   </div>
</div>
<h4 style="float:left;margin-left:5px;">发表留言</h4><br/><br/>
<form action="message_save.php" method="post" style="margin:10px 0 10px 5px;">
    <input class="col-md-7 col-sm-6 col-xs-6" type="text" name="title" placeholder="留言标题">
    <br/><br/>
   	<textarea class="col-md-7 col-sm-6 col-xs-6" placeholder="留言内容"></textarea>
   	<input class="btn btn-default btn-success btn-block" style="width:650px;" type="submit" name="message" value="发表留言">
</form>
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