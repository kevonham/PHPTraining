<?php
//課題１
function Year($x, $y){
    $z=$x+$y;
    return $z;
}
echo Year(2000,17)."年度の新入社員研修がスタートしました。頑張りましょう。";
echo "<br />";

//課題２
function addfive($num){
    echo $num+=5;
}
function addsix(&$num){
    echo $num+=6;
}

$orignum=10;

addfive($orignum);
echo "<br/>";
echo "元の値は $orignum<br/>";

addsix($orignum);
echo "<br/>";
echo "元の値は $orignum<br/>";


 ?>
