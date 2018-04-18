<?php
    require('../check_login.php');
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
    <style>
        td,th{text-align:center;}
    </style>
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
            <li><a href="sta_info.php"><span class="glyphicon glyphicon-list"></span> 职工信息</a></li>
            <li class="active"><a href="sala_info.php"><span class="glyphicon glyphicon-list"></span> 工资信息</a></li>
            <li><a href="aboutus.php"><span class="glyphicon glyphicon-question-sign"></span> 关于我们</a></li>
            <li><a href="../logout.php">注销</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>工资信息</h1>
            <h4>及时进行工资信息的添加、更新...</h4>
        </hgroup>
    </div>
</div>
<div class="case">
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
        <thead>
        <caption>岗位工资信息表</caption>
           <tr class="info central">
              <th>岗位编号</th>
              <th>岗  位</th>
              <th>基本工资</th>
              <th>普通津贴</th>
              <th>特殊津贴</th>
              <th>总&nbsp;&nbsp;计</th>
              <th>操&nbsp;&nbsp;作</th>
           </tr>
        </thead>
        <tbody>
        <?php
            require_once('../condb.php');
            $sql="select * from gang_info ";
            $rs=$pdo->query($sql);
        //    var_dump($rs);
            $list=$rs->fetchAll(PDO::FETCH_ASSOC);
        //    var_dump($list);
           foreach ($list as $key => $value) {
            $_SESSION['gname']=$value['gname'];
            ?>
            <tr>
               <td><?=$value['gnum']?></td>
               <td><?=$value['gname']?></td>
               <td><?=$value['gbasemon']?></td>
               <td><?=$value['gjinmon']?></td>
               <td><?=$value['gtemon']?></td>
               <td><?=$value['gtemon']+$value['gjinmon']+$value['gbasemon']?></td>
               <td><a href="exit1.php ? gname=<?=$value['gname']?>">更新</a>
               <a href="del.php ? gname=<?=$value['gname']?>" onclick="return del_confirm();">删除</a>
               </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
        <p style="text-align:right;">
        <button id='add' class='btn-default btn-warning'>增加岗位</button>
        </p>
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
$(function(){
    function del_confirm(){
      if(confirm('是否确认删除?')){
        return true;
      }else{
        return false;
      }
    }
    var oAdd=document.getElementById('add');

    oAdd.onclick=function(){
        window.location.href='add.html';
    }

});

</script>
</body>
</html>