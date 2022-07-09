<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 9): ?>
  <p>※ 営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>

<?php
$s = '';
if ($s == ''):
  echo '※文字が入っていません';
else:
  echo $s;
endif;
?>