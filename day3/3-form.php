<?php 

var_dump($_GET);
var_dump($_POST);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>登录</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div>
				<label for="username">用户名</label>
				<input type="text" id="username" name="username">
			</div>
			<div>
				<label for="password">密码</label>
				<input type="password" id = "password" name = "password">
			</div>
			<button type="submit">登录</button>
		</form>
	</body>
</html>