<?php
    session_start();
     header('Content-type:text/html;charset=utf-8');
    $username=trim($_POST['username']);
    $username=htmlspecialchars((strtolower($username)));
    $pwd=$_POST['pwd'];
    $pwd=addslashes($pwd);
//    echo "用户名：".$username."密码：".$pwd;

    require('condb.php');

		if($username == "" || $pwd == "") {
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		} else {
			$sql = "select sname,pwd from login where sname = '$_POST[username]' and pwd = '$_POST[pwd]'";
			$result = $pdo->query($sql);
//            var_dump($result);
			if($result) {
                foreach ($pdo->query($sql) as $value)//将数据以索引方式储存在数组中
//                var_dump($value);
                    $username=$value[0];
                    $_SESSION['username']=$value[0];
//				echo "{$_SESSION['username']}";
			   if($username=='admin'){
                      header('Location:admin/admin_index.php');
              }else{
                     header('Location:staff/index.php');
               }
            } else {
                    echo "<script>alert('密码不正确！');history.go(-1);</script>";
                }
		  }
?>
