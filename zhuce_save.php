<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>zhuce_save</title>
</head>
<body>
	<?php 
		print_r($_POST);
		$username =$_POST["sname"];
		$password=$_POST["pwd"];
		$zgnum=$_POST["snum"];
		$sex =isset($_POST["sex"])?$_POST["sex"]:"男";
		$gwnum=$_POST["gnum"];
		$birth=$_POST["sbir"];
		$worktime=$_POST["stime"];
		require("fun.php");
		$db=conn();
		$sql="insert into login set
					sname='$username',
					pwd='$password'";
		$count=$db->exec($sql);
		$sqll="insert into staff_info set
					sname='$username',
					snum='$zgnum',
					ssex='$sex',
					sbir='$birth',
					gnum='$gwnum',
					stime='$worktime'";
		$countt=$db->exec($sqll);
		if($countt){
			echo "<script>alert('注册成功');location.href='login.php'</script>";
		}

	 ?>
</body>
</html>