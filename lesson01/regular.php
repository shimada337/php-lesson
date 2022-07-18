<?php
$zip = '123-456';

if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
  echo '郵便番号：〒' . $zip;
} else {
  echo '※郵便番号をご記入ください';
}
$phone_number = '090-1234-5678';

if (preg_match("/\A\d{3}[-]\d{4}[-]\d{4}\z/", $phone_number)) {
  echo '携帯番号：' . $phone_number;
} else {
  echo '※携帯番号を入力してください';
}
?>