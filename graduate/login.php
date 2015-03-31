<?php

// 开启session会话，用于访问控制
@session_start();


// 如果已经登陆过了，则直接跳转到 主页 
//这个session[uid]是干啥用的？
if( isset( $_SESSION['uid'] ) ) {
	//连接数据库
	//根据数据库中获得的消息进行跳转
	//header("Location: ./index.php");
	exit();
}

if ( !empty($_POST['userid']) && !empty($_POST['password'])){
	do_login();
}else{
	show_login_form();
}

/**
 *显示登陆表单。如果有错误提示，显示错误提示？？？
 */
 
function show_login_form( $error=null){
	
	?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="UTF-8">
	<title>登陆页面</title>
</head>
<body id="login">
	<?php
		if( !is_null($error)){
			echo '<span style="color:#E33">' . $error . '</span>';
		}
	?>
	<div id="wrapper">
		<form action="./login.php" method="post">
			<label for="userid">用户名：</label>
			<input type="text" name="userid" id="userid"><br>
			<label for="password">密码：</label>
			<input type="password" name="password" id="password"><br>
			<input type="submit" value="登陆">
		</form>
	</div>
</body>
</html>
	<?php
	
}


/**
 *
 *处理登陆事务
 *
 */
function do_login(){
	$userid = trim( $_POST['userid'] );
	$password = trim( $_POST['password'] );
	
	include './config.php';
	
	//创建连接
	$conn =  new mysqli($db['host'],$db['username'],$db['password'],$db['database']);
	//验证连接正确与否
	if ($conn->connect_errno) {
	die('数据库连接出错: ' . $conn->connect_error);
	}
	//设置编码
	$conn->set_charset("utf8");
	$sql = "SELECT `UserID`,`UserName`, `Password`, `Type` FROM `Users` WHERE `UserID`=? LIMIT 1";
	if ($stmt=$conn->prepare($sql)){
		$stmt->bind_param( "s", $userid );
		//s是什么意思呢？
		$stmt->execute();
		$stmt->bind_result($userid, $username, $password_hash, $type );
		if( $stmt->fetch() ) {
		// 说明数据库中有对应的数据
			if( $password_hash === MD5($password) ) {
				// 密码匹配，说明登陆成功，跳转到 主页
				$_SESSION['uid'] = $userid;
				if ( $type === 0)header("Location: ./admin.html");
				else if ( $type === 1 )header("Location: ./teacher.html");
				else header("Location: ./student.html");
				
				/*
				echo $userID;
				echo "<br />";
				echo $username;
				echo "<br />";
				echo $password;
				echo "<br />";
				echo md5($password);
				*/
			} else {
				show_login_form( '用户名或密码错误' );
				//echo("用户名或密码错误");
			}
		}
		$stmt->close();
		$conn->close();
		return;
	} else {
		$conn->close();
		die('数据库操作出错: ' . $conn->error);
	}
	
}