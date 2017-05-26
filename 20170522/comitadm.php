<!DOCTYPE html>
<html lang = "ja">
 <head>
     <meta charset = "utf-8">
     <title>管理画面</title>
 </head>
<body>
    <h1>管理画面</h1>
<table border = "1" width = 100%>
<tr>
    <th></th>
    <th>姓</th>
    <th>名</th>
    <th>性別</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
    <th>どこで知ったか</th>
    <th>質問カテゴリ</th>
    <th>質問内容</th>
</tr>

<?php
$lines = file("comitdata.csv");

    foreach($lines as $line){
    echo "<tr>";
        $data = explode(",", $line);
        for ($i=0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
    echo "</tr>";
    }
?>

</table>

<a href = "kadai-comit.php">フォームに戻る</a>
