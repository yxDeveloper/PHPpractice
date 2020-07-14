<?php

// 这里是在 响应头中添加一个 localhost 的头信息
// header('Location: 1-content-type.php');
//客户端浏览器在接受到这个头信息过去会自动跳转到 制定的地址

//切记不能循环重定向
header('Localtion: 03-location2.php');