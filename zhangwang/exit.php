<html>
<head>
    <meta charset="UTF-8">
    <title>用户信息修改</title>
</head>
<body>	    
    <h3>用户信息修改</h3>
  <?php 
     $gname=$_GET['gname'];
     require_once('../condb.php');
     $sql="select * from gang_info where `gname` = $gname ";
     $rs = $pdo->query($sql);
     var_dump($rs);

     $result =$rs->fetchAll(PDO::FETCH_ASSOC);      //	fetchAll(); //返回一个包含结果集中所有行的数组
     var_dump($result);

     if (!$result) {
       exit();
      }
  ?>
 <form action="update.php" method="post">
    <p>
    <input type="text" name="gbasemon" placeholder="基本工资" value="<?=$result['gbasemon']?>">
    </p>
    <p>
     <input type="text" name="gjinmon" placeholder="普通津贴"  value="<?=$result['gjinmon']?>">
       </p>
      <p>
     <input type="text" name="gtemon" placeholder="特殊津贴"  value="<?=$result['gtemon']?>">
      </p>
     <p>
  <!-- <input type="hidden" name="id" value="<?=$result['id']?>"> -->	          
  <button type="submit">修改</button>
   </p>
  </form>
</body>
</html>
