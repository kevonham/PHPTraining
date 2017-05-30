<?php
if(isset($_POST['send'])){
    $fname = $_POST['fname'];
    $sname = $_POST['name'];
    $gender = $_POST['gender'];
    $num = implode("-", $_POST['num']);
    $madd = implode("@", $_POST['madd']);
    /*checkbox要素は、変数を送信する、implode関数で文字列に*/
    $category = $_POST['category'];
}
if(isset( $_POST["address"]) ){
    $address = $_POST['address'];
}
else{
    $address = "";
}

if(isset( $_POST["resource"]) ){
    $resource = implode("・", $_POST["resource"]);
}
else{
    $resource = "";
}

if(isset( $_POST['question']) ){
    $question = $_POST['question'];
}
else{
    $question = "";
}
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">

    <link rel = "stylesheet" href = "comitconf.css" type = "text/css">
    <title>お問い合わせ　確認</title>
</head>
<body>
    <div class = "main">
        <h1>お問い合わせ 確認</h1>

        <form method="post" action="kadai-comitsend.php">

            <h2>この内容でよろしいですか？</h2>

            <div class = "fname">
                <label>お名前:</label><?php echo $fname." ".$sname; ?>
            </div>

            <div class = "gender">
                <label>性別:</label><?php echo $gender; ?>
            </div>

            <div class = "address">
                <label>住所:</label><?php echo $address; ?>
            </div>

            <div class = "num">
                <label>電話番号:</label><?php echo $num; ?>
            </div>

            <div class = "madd">
                <label>メールアドレス:</label><?php echo $madd; ?>
            </div>

            <div class = "resource">
                <label>どこで知ったか:</label><?php echo $resource; ?>
            </div>

            <div class = "category">
                <label>質問カテゴリ:</label><?php echo $category; ?>
            </div>

            <div class = "question">
                <label>質問内容:</label><?php echo $question; ?>
            </div>

            <div class = "button">
                <input type="submit" name="conform" value="送信"/>
                <button onclick = "history.back( )">戻る</button>
            </div>
            <!--buttonタグはボタンを作成する、history.back()で前のページへ-->
            <div class = "ub">
                <a class ="urlbutton" href="kadai-comit.php">未入力ページに戻る</a>
            </div>
            <!--a hrefタグは特定のページにジャンプする-->

            <?php
            echo "<input type=\"hidden\" name=\"fname\" value=\"$fname\">";
            //echo '<input type="hidden" name="fname" value="'.$fname.'">';
            /*inoutタグを出力 次のフォームに移行するため valueの中身を出力する*/
            /*<input type="hidden" name="fname" value= <php?$fname?>>;*/
            echo "<input type=\"hidden\" name=\"sname\" value=\"$sname\">";
            echo "<input type=\"hidden\" name=\"gender\" value=\"$gender\">";
            echo "<input type=\"hidden\" name=\"address\" value=\"$address\">";
            echo "<input type=\"hidden\" name=\"num\" value=\"$num\">";
            echo "<input type=\"hidden\" name=\"madd\" value=\"$madd\">";
            echo "<input type=\"hidden\" name=\"resource\" value=\"$resource\">";
            echo "<input type=\"hidden\" name=\"category\" value=\"$category\">";
            echo "<input type=\"hidden\" name=\"question\" value=\"$question\">";
            ?>

        </form>
    </div>
</body>
</html>
