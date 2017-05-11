<?php
//if
$score=70;
if($score>=80){
    echo"合格です";
}
else{
    echo"不合格です";
}
echo "<br />";

//switch
$favcolor="赤";
switch($favcolor){
    case"赤":
    echo"あなたの好きな色は $favcolor ！";
    break;

    case"青":
    echo "あなたの好きな色は $favcolor !";
    break;

    case"黄色":
    echo"あなたの好きな色は $favcolor !";
    break;

    default:
    echo"認識できません";
    break;

}
 ?>
