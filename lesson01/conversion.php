<?php
$age = '２３';

$age = mb_convert_kana($age, 'n', 'UTF-8'); //全角を半角に直してくれる

if (is_numeric($age)) {
  echo $age . '歳です';
} else {
  echo '※数字で入力してください';
}
?>