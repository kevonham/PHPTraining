<html lang="ja">
<head>
<meta charset="UTF-8">


<title>お問い合わせ　確認</title>
</head>
<body>
<center>
<div><h1>お問い合わせ 確認</h1></div>

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

    <div>この内容でよろしいですか？</div><br/>
    <div>お名前: <?php echo $fname." ".$sname; ?></div><br/>
    <div>性別: <?php echo $gender; ?></div><br/>
    <div>住所: <?php echo $address; ?></div><br/>
    <div>電話番号: <?php echo $num; ?></div><br/>
    <div>メールアドレス:<?php echo $madd; ?></div><br/>
    <div>どこで知ったか:<?php echo $resource; ?></div><br/>
    <div>質問カテゴリ:<?php echo $category; ?></div><br/>
    <div>質問内容:<?php echo $question; ?></div><br/>


    <form method="post" action="kadai-comitsend.php">
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

<input type="submit" name="conform" value="送信"/>
<div><button onclick = "history.back( )">戻る</button></div><br/>
<!--buttonタグはボタンを作成する、history.back()で前のページへ-->
<div><a href="kadai-comit.php">未入力ページに戻る</a></div>
<!--a hrefタグは特定のページにジャンプする-->
</center>
</form>
</body>
</html>
