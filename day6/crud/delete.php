<?php

//?号传参数的时候等号两边不能写空格:id=4;
//接收要删除的数据 ID
if (empty($_GET['id'])) {
	exit('<h1>必须传入指定参数</h1>');
}

$id = $_GET['id']; // => 1,2,3

// 1.建立连接
$connection = mysqli_connect('127.0.0.1','root','123456','test');

if (!$connection) {
	exit('<h1>连接数据库失败</h1>');
}

//2.开始查询
//此处引号为: '1'.1.'1';
$query = mysqli_query($connection,'delete from users where id in (' . $id . ');');

if (!$query) {
	exit('<h1>查询数据失败</h1>');
}

$affected_rows = mysqli_affected_rows($connection);

if ($affected_rows <= 0) {
	exit('<h1>删除失败</h1>');
}

header('Location: index.php');


