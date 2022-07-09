<?php
date_default_timezone_set('Asia/Tokyo');
for ($i=0; $i<366; $i++):
  $time = strtotime("+$i day"); //ダブルクォーテーションで変数の内容を展開している
  $day = date('n/j(D)', $time);
  echo $day . '<br>';
endfor;
?>