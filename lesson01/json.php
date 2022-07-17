<?php
  $file = file_get_contents('feed.json');
  $json = json_decode($file); //decode jsonを配列に (コード化を解除)
  //jsonは2段階に分かれる

  echo $json->items[0]->title;
  foreach ($json->items as $item):
?>
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>