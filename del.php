<?php
require_once('PDO.php');
$sql ="select * from student";
$rs = $pdo->query($sql);
$result =$rs->fetchAll(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>删除学生信息</title>
</head>
<body>
    <table border="1">
         <thead>
             <tr>
	     <th>学号</th>
	     <th>姓名</th>
	     <th>性别</th>
	     <th>年龄</th>
	     <th>专业</th>
	     <th>电话</th>
	     <th>操作</th>
             </tr>
      </thead>	
      <tbody>
	<?php
	      foreach ($result as $key => $value) {
	?>

	<tr>
	     <td><?=$value['sid']?></td>
	     <td><?=$value['sname']?></td>
	     <td><?=$value['sex']?></td>
	     <td><?=$value['age']?></td>
	     <td><?=$value['major']?></td>
	     <td><?=$value['tel']?></td>
	     <td>
		<a href="del_id.php?sid=<?=$value['sid']?>">删除</a>
		<a href="update.php?sid=<?=$value['sid']?>">修改</a>		
	     </td>
	</tr>

	<?php
	      }
	?>
      </tbody>

    </table>
</body>
</html>