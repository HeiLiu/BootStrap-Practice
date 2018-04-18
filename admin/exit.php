<!DOCTYPE html>
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
     $sql="select * from gang_info where `gname` = '$gname' ";
     $rs = $pdo->query($sql);

     $result =$rs->fetchAll(PDO::FETCH_ASSOC);      //	fetchAll(); //返回一个包含结果集中所有行的数组
     var_dump($result);
        foreach ($result as $key => $value)
     if (!$result) {
       exit();
      }
  ?>
 <form action="update.php" method="post">
    <p>
    <input type="text" name="gname" value="<?=$value['gname']?>">
    </p>
    <p>
    <input type="text" name="gnum" value="<?=$value['gnum']?>">
    </p>
    <p>
    <input type="text" name="gbasemon" value="<?=$value['gbasemon']?>">
    </p>
    <p>
     <input type="text" name="gjinmon"  value="<?=$value['gjinmon']?>">
       </p>
      <p>
     <input type="text" name="gtemon"  value="<?=$value['gtemon']?>">
      </p>
     <p>
  <!-- <input type="hidden" name="id" value="<?=$value['id']?>"> -->
  <button type="submit">修改</button>
   </p>
  </form>
</body>
</html>
