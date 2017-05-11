<?php
//sample1
function writeMsg(){
    echo "Hello World!";
}
writeMsg();
echo"<br />";

//sample2 引数が一つ
function family($fname){
    echo "$fname yamada<br>";
}
echo "<table border= 1>";
echo "<tr>";
echo "<td>".family("yuuki")."</td>";
echo "<td>".family("hirobumi")."</td>";
echo "<td>".family("yukiko")."</td>";
echo "</tr>";
echo "</table>";

//samle3 引数が二つ
function familyN($fname, $year){
    echo "$fname yamadaが生まれた年は $year <br>";
}

familyN("yuuki", "1975");
familyN("hirobumi", "1978");
familyN("yukiko", "1983");
echo"<br />";

//sample4 デフォルト
function setHight($minheight=50){
    echo"高さは$minheight<br>";
}
setHight(350);
setHight();
setHight(135);
echo"<br />";

//sample5 値を返す
function sum($x, $y){
    $z=$x+$y;
    return $z;
}
echo "5+10=".sum(5,10)."<br>";
echo "7+13=".sum(7,13)."<br>";
echo "2+4=".sum(2,4)."<br>";
echo"<br />";


?>
