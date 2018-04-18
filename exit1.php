  <?php
     $gname=$_GET['gname'];
     require_once('../condb.php');
     $sql="select * from gang_info where `gname` = '$gname' ";
     $rs = $pdo->query($sql);

     $result =$rs->fetchAll(PDO::FETCH_ASSOC);      //	fetchAll(); //返回一个包含结果集中所有行的数组
     var_dump($result);
        foreach ($result as $key => $value)
     if (!$result) {
       exit();
      }
  ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>填写岗位信息</title>
    <link rel="shortcut icon" href="../img/100du.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        /*web background*/
        .container{
            display:table;
            height:100%;
        }

        .row{
            display: table-cell;
            vertical-align: middle;
        }
        /* centered columns styles */
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            text-align:left;
            margin-right:-4px;
        }
        @media (min-width: 768px)
        {
            .well{
                height:400px;
                width:350px;
            }

        }
    </style>
</head>

<body>
<div class="container">
    <div class="row row-centered">
        <div class="well col-md-6 col-centered">
            <h2>岗位基本信息</h2>
            <form action="add.php" method="post">
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="gnum" value="<?=$value['gnum']?>"/>
                </div>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" name="gname" value="<?=$value['gname']?>"/>
                </div>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" name="gbasemon"  value="<?=$value['gbasemon']?>"/>
                </div>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" name="gjinmon"value="<?=$value['gjimon']?>"/>
                </div>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" name="gtemon" value="<?=$value['gtemon']?>"/>
                </div>
                <br/>
                <p>
                    <button type="submit" class="btn btn-info btn-block">确 认</button>
                    <button type="reset" class="btn btn-success btn-block">取 消</button>
                </p>
            </form>
        </div>
    </div>
</div>


<script src="../js/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>
</body>
</html>