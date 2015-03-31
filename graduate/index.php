<?php
// 开启session会话，用于访问控制
@session_start();

// 如果用户没有登录
if( !isset( $_SESSION['uid'] ) ) {
	header("Location: ./login.php");
	exit();
}
