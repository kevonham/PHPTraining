<?php
//ファイルを出力する
$file = "sample.txt";
@readfile($file);

//ファイルまたはURLを開く
//ファイルポインタを閉じる
$fp = @fopen("sample.txt","r");
fclose($fp)

//ファイルの内容を全て取得する
$contents = @file_get_contents('')
 ?>
