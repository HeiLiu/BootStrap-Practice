<?php
require_once('PDO.php');
$sql ="select * from student";
$rs = $pdo->query($sql);
$result =$rs->fetchAll(PDO::FETCH_ASSOC);      //	fetchAll(); //返回一个包含结果集中所有行的数组
var_dump($result);
?>
<table border="1">
     <thead>
           <tr>
	     <th>学号</th>
	     <th>姓名</th>
	     <th>性别</th>
	     <th>年龄</th>
	     <th>专业</th>
	     <th>电话</th>
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
	</tr>
      <?php 
       }
       ?>
     </tbody>

</table>

