<?php
$dict = array(
	'hello' => '你好',
	'hello1' => '你好',
	'hello2' => '你好',
);
// var_dump(array_keys($dict));
//var_dump(array_values($dict));
// var_dump(array_key_exists('hello',$dict));
// var_dump(array_key_exists('hello4',$dict));

// if($dict['foo']) {
// 	echo $dict['foo'];
// } else {
// 	echo '没有';
// }
// 
if (isset($dict['foo'])) {
	echo $dict['foo'];
} else {
	echo '没有';
}

if (empty($dict['foo'])) {
	echo '没有';
} else {
	echo $dict['foo'];
}

// function empty ($input) {
// 	return !isset($input) || $input == false
// }