<?php
//防跳墙文件
    session_start();
        header('Content-type:text/html;charset=utf-8');
            if (!isset($_SESSION['username'])) {
                 echo "<script>alert('您尚未登陆，请重新登录');location.href='../login.php';</script>";
        }
?>