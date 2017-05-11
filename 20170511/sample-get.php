<?php
if(isset($_GET['comment'])){
$comment = $_GET/*環境変数*/['comment'];
echo $comment;
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta cahrset = "UFT-8">
<title>フォームからデータを受け取る</title>
</head>
<body>
    <h1>フォームデータの送信</h1>
    <form action = "sample-get.php" method = "get" >
    <input type = "text" name = "comment"><br/>
    <input type = "submit" value = "送信">
</form>
</body>
</html>
