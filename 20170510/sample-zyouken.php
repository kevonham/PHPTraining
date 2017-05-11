<?php
//if
$score=90;
if($score>=80){
    echo "合格です！おめでとうございます！";
}
echo "<br />";

//elseif
$score=80;
if($score>=80){
    echo"合格";
}
elseif($score>=60){
    echo"不合格";
}
echo "<br />";

//switch
$level1="C";
switch($level1){
    case"A":
    print("素晴らしい");
    break;

    case"B":
    print("いいね");
    break;

    case"C":
    print("悪くない");
    break;

    default:
    print("頑張って");
    break;
}

?>
