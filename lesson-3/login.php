<?php
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	if($username=='aaa'&&$pwd=='123'){
		echo('欢迎您,'.$username);
	}else{
		echo('登录失败，用户名或密码错误');
	}
?>