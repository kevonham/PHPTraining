<?php
//カウント値を保存しておくファイル
$count=count(file("comitdata.csv"));
$count++;//値＋１

$fp=fopen("comitdata.csv","a");//ファイル開く

$weekly=["日", "月", "火", "水", "木", "金", "土"];
$now=date("Y m/d(".$weekly[date("w")].")H:i:s");

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$num = $_POST['num'];
$madd = $_POST['madd'];
$resource = $_POST['resource'];
$category = $_POST['category'];
$question = $_POST['question'];

$data = [$fname, $sname, $gender, $address, $num, $madd, $resource, $category, $question];

$alldata = implode(",", $data);

rewind($fp);
fwrite($fp, $count.",".$alldata."\n");//値書き込み
fclose($fp);//ファイル閉じる*/
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "comitsend.css" type = "text/css">
    <title>お問い合わせ　終了</title>
</head>

<body>
    <div class = "main">
        <div><h2>お問い合わせ 完了</h2></div>
        <div class = "thank">お問合せありがうございました。</div>
        <div class = "num">あなたのお問合せ番号は<?php echo $count; ?>です。</div>
        <div class = "data">お問合せ日時:<?php echo $now; ?></div>
        <div class = "button">
            <button onclick = "location.href='http://localhost/PHPTraining/20170522/kadai-comit.php'">お問合せに戻る</button>
        </div>
    </div>
</body>
</html>
