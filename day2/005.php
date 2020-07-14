<?php

date_default_timezone_set('PRC');

echo time();
echo '<br>';
echo date('Y-m-d H:i:s', time());

$str = '2019-09-11 19:51:26';

$timestamp = strtotime($str);
echo date('Y年m月d日<b\r>H:i:s',$timestamp);