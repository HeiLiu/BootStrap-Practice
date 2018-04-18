<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>职工网注册</title>
	<style type="text/css">
		body{ text-align:center;
              	} 
		*{margin: 0;padding: 0;}
		h1{
		        font-size: 60px;
		        color: #115599;
		        font-family:Old English Text MT;
		        font-weight: bolder;
		    }
		li,ul,ol{list-style: none;}
		#a{width: 500px;border: 3px solid #a00;margin: 100px auto;}
		#a li{margin: 10px auto}
		#a li label{margin: 0 20px}
		#a li textarea{width: 260px;height: 300px;border: solid;border-width: 2px;}
		</style>
</head>
<body>
	<h1>workers</h1>
	<h2>职工网</h2>
	<div id="a">
		<form action="zhuce_save.php" method="post">
			<li><label >用户名</label><input type="text" name="username"></li>
			<li><label >密码</label><input type="text" name="passwords"></li>
			<li><label >职工号</label><input type="text" name="zgnums"></li>
			<li><label >性别</label><input type="radio" name="sexs" value="男" checked="true">男
					   	    <input type="radio" name="sexs" value="女">女</li>
			<li><label >岗位编号</label><input type="radio" name="gwnums" value="1" checked="true">1
					   	    <input type="radio" name="gwnums" value="2">2
					   	    <input type="radio" name="gwnums" value="3">3</li>
			<li><label>出生日期</label><input type="datetime" name="births"><br>(例:2017-1-1)</li>
			<li><label >工作时间</label><input type="text" name="worktimes"></li>
			<li><input type="submit" name="register" value="注册" ></li>
		</form>
			
	</div>
</body>
</html>