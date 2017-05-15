<?php
//カウント値を保存しておくファイル
$fp=fopen("count.txt","r+");//ファイル開く
$getdata=trim(fgets($fp));//9桁分、値読み取り
$count=explode(",", $getdata);
$count[0]++;//値＋１

echo 'あなたは'.$count[0].'人目のお客様です<br />';
$weekly=["日", "月", "火", "水", "木", "金", "土"];
$now=date("Y m/d(".$weekly[date("w")].")H:i:s");
echo"アクセス日時:".$now;
echo "<br />";
echo "前回アクセス:".$count[1];

rewind($fp);//ファイルポインタを先頭に戻す
fputs($fp, $count[0].",".$now);//値書き込み
fclose($fp);//ファイル閉じる

$count1 = "b";
printf("%c", $count1);
echo "<br />";

 ?>
