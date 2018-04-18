<?php  
    require_once('../condb.php');
    $sql="select * from gang_info ";
    $rs=$pdo->query($sql);
    //var_dump($rs);
    $list=$rs->fetchAll(PDO::FETCH_ASSOC);
   // var_dump($list);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>工资信息查询,添加,更新</title>
    <style>
         table{
             width:60%;
             border-collapse: collapse;
         }
        table,th,td{
         border:1px solid #aaa;
         }
         a{text-decoration:none;}
     </style>
</head>

<body>
    <table>
    <caption>工资信息表</caption>
<thead>
   <tr>
      <th>岗位编号</th>
      <th>岗位</th>
      <th>基本工资</th>
      <th>普通津贴</th>
      <th>特殊津贴</th>
      <th>总计</th> 
      <th>操作</th>
   </tr>
</thead>
<tbody>
<?php
   foreach ($list as $key => $value) {
    ?>
    <tr>
       <td><?=$value['gnum']?></td>
       <td><?=$value['gname']?></td>
       <td><?=$value['gbasemon']?></td>
       <td><?=$value['gjinmon']?></td>
       <td><?=$value['gtemon']?></td>
       <td><?=$value['gtemon']+$value['gjinmon']+$value['gbasemon']?></td>
       <td><a href="exit.php ?gname=<?=$value['gname']?>">更新</a>
               <a href="del.php" onclick="return del_confirm();">删除</a>
       </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
<p>
<button><a href="add.html">添加</a></button>
</p>
<script>
function del_confirm(){
  if(confirm('是否确认删除?')){
    return true;
  }else{
    return false;
  }
}
</script>
</tbody>
</table>
</body>
</html>
