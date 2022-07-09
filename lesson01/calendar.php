<?php
date_default_timezone_set('Asia/Tokyo');
$time = strtotime('+1 day'); //unixタイムスタンプ
echo $time . '<br>';
$day = date('n/j(D)', $time);
echo $day . '<br>';
?>