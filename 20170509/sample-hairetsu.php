<?php
//配列
$a = ["C言語","MySQL","PHP","ABC"];
print_r($a);
print( "<br />");
$a[0] = "Java";
print_r($a);
print( "<br />");
$a[10] = "THML";
print_r($a);
print( "<br />");
//連想配列
$like2=array("color"=>"red","food"=>"sushi");
print_r($like2);
print("<br/>");
$like1["color"]="red";
$like2["food"]="sushi";
print_r($like2);
print("<br/>");
$age=array("yamada"=>"25","honda"=>"37","kato"=>"67");
echo "yamadaは".$age['yamada']."歳";
 ?>
