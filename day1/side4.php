<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	/*  */
</style>
<body>
	<p><?php echo "hello"; ?></p>
	<br>
	<br>
	<?php 
	$age = 19;
	if($age >= 18) { ?>
	<p>成年人</p>
	<?php } else { ?>
	<p>小朋友</p>
	<?php } ?>
	<br>
	<br>
	<?php if($age > 18 ): ?>
	<p>成年人</p>
	<?php else: ?>
	<p>小朋友</p>
	<?php endif ?>
</body>
</html>