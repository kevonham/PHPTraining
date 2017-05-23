
<html lang="ja">
<head>
<meta charset="UTF-8">


<title>お問い合わせ　確認</title>
</head>
<body>
<center>
<div><h2>お問い合わせ 確認</h2></div>

   <?php
      $button = $_POST['send'];
      $fname = $_POST['fname'];
      $sname = $_POST['name'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $num = $_POST['num'];
      $madd = $_POST['madd'];
      $resource = $_POST['resource'];
      $category = $_POST['category'];
      $question = $_POST['question'];
  ?>


  <form method="post" action="kadai-comitsend.php">
    <div>この内容でよろしいですか？</div><br/>
    お名前: <?php echo $fname." ".$sname; ?><br/>
    性別: <?php echo $gender; ?><br/>
    住所: <?php echo $address; ?><br/>
    電話番号: <?php echo $num; ?><br/>
    メールアドレス:<?php echo $madd; ?><br/>
    どこで知ったか:<?php echo $resource; ?><br/>
    質問カテゴリ:<?php echo $category; ?><br/>
    質問内容:<?php echo $question; ?><br/>

<?php
      echo "<input type=\"hidden\" name=\"fname\" value=\"$fname\">";
      echo "<input type=\"hidden\" name=\"sname\" value=\"$sname\">";
      echo "<input type=\"hidden\" name=\"gender\" value=\"$gender\">";
      echo "<input type=\"hidden\" name=\"address\" value=\"$address\">";
      echo "<input type=\"hidden\" name=\"num\" value=\"$num\">";
      echo "<input type=\"hidden\" name=\"madd\" value=\"$madd\">";
      echo "<input type=\"hidden\" name=\"resouce\" value=\"$resource\">";
      echo "<input type=\"hidden\" name=\"category\" value=\"$category\">";
      echo "<input type=\"hidden\" name=\"question\" value=\"$question\">";
    ?>

<input type="submit" name="kadai-comisend.php" value="送信"/>

</center>
</form>
</body>
</html>
