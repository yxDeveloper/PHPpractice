<?php

echo 'hello\nworld';

echo 'I\'m a better man';

echo 'OS path: C:\\windows';


echo "hellow\nworld";

$name = 'yx';

echo "hello $name";

$arr = array(1,2,3,4,5);
var_dump($arr);

$arr1 = [1,2,3,4,5];
var_dump($arr);

$arr2 = array('key1' => 'value','key2' => 'value2' );
var_dump($arr2);

$arr3 = ['key1' => 'value1','key2'=>'value2'];
var_dump($arr3);

$str = '123';
$num = (int)$str;
$flag = (bool)$num;
echo $num;

$name = 'yx';
$message = 'hey' . $name;
echo $message;
$foo .= $message;
echo $foo;


$arr4 = array('name' => 'zhangsan','age' => '18');
foreach($arr4 as $key => $value) {
	echo $key.' '.$value;
}

