<?php
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item):
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
// echo $xmlTree->channel->item[1]->title; //配列で管理されている
?>