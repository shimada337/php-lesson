<?php
  date_default_timezone_set('Asia/Tokyo');
  echo '現在は、' . date('G時 i分 s秒') . 'です'; //.(ドット)で文字列連結ができる
  echo '現在は、', date('G時 i分 s秒'), 'です'; //echoは,(カンマ)で区切ればパラメーターをいくつも持てる
?>