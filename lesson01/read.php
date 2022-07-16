<?php
$news = file_get_contents('data/news.txt'); //読み込みができる
echo $news;

//ファイルの追記
$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.txt', $news);

// readfile('data/news.txt'); //そのまま出力することができる
?>