<?php

// 增删改数据的的查询语句

//1.建立与数据库服务器之间的连接
$connection = mysqli_connect('127.0.0.1','root','123456','demo2');

mysqli_set_charset($connection,'utf8');

if (!$connection) {
	//连接数据库失败
	exit('<h1>连接数据库失败</h1>');
}

$query = mysqli_query($connection,'delete from users where id = 47;');

if(!$query) {
	exit('<h1>删除失败</h1>');
}

//如果拿到受影响行
//传入的一定是连接对象
$row = mysqli_affected_rows($connection);
var_dump($row);


//炸桥 关闭连接

mysqli_close($connection);

