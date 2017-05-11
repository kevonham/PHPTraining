<?php
//算術演算子
$x=10;
$y=6;
echo $x + $y;
echo "<br />";

//代入演算子
$x=20;
$x += 100;
echo $x;
echo "<br />";

$x=100;
$y=20;
echo $x %= $y;
echo "<br />";

//比較演算子
$x=100;
$y="100";
//等しい
var_dump($x == $y);
echo "<br />";
//同一
var_dump($x === $y);
echo"<br />";

$x=50;
$y=50;
//以上
var_dump($x>=$y);
echo "<br />";

//インクリメント演算子
echo ++$x;//50
echo "<br />";

$x=50;
echo $x++;//50
echo $x;//51
echo "<br />";

echo $y;//50
echo "<br />";

$x=100;
$y=50;
//論理演算子
if($x==100 and $y==50){
    echo "Hello World!";
}
echo "<br />";

//文字列演算子
$txt1="Hello";
$txt2=" World!";
echo $txt1.$txt2;
echo "<br />";

$txt1 .= $txt2;
echo $txt1;
echo "<br />";




 ?>
