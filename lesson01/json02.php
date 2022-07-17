<?php
$json_sample = [
  "title" => "JSONサンプル",
  "items" => [
    "りんご",
    "みかん"
  ]
];

  $json = json_encode($json_sample, JSON_UNESCAPED_UNICODE); //encode 配列をjsonに (コード化)
  echo $json;
  file_put_contents('json_sample.json', $json);
  ?>