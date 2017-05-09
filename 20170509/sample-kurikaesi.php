<?php
//while
$a=0;
while($a<=3){
    print($a);
    $a++;
}
echo "<br>";
//do while
$s=0;
$i=0;
do{
    ++$i;
    $s += $i;
}while($i<10);
print "１から $i までの和は $s";
echo "<br>";
//for
for ($a=0;$a<=3;$a++){
    print($a."<br/>");
}
echo "<br>";
//for each
$color=array("red","green","blue");
foreach($color as $value){
    print("{$value}<br />");
}
$color=array("red","green","blue");
foreach($color as $iro=>$value){
    print("$iro:$value<br />");
}
//break and continue
for($i=0;$i<10;$i++){
    if($i==5){
        echo "5 に着いた<br>";
        continue;
    }
    echo $i."<br>";
}
echo "<hr>";
for($i=0;$i<10;$i++){
    if($i==5){
        echo "最後になった<br>";
        
    }
    echo $i."<br>";
}
 ?>
