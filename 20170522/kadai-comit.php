<!DOCTYPE html>
<html lang = "ja">
<head>
<meta cahrset = "UFT-8">


<title>お問合せ</title>
</head>
<body>

<form action = "kadai-comitconf.php" method = "post" onsubmit="return validate()">
<center>
<h3>お問い合わせ</h3><br/>
    <div>
    <label for = "fname">姓</label>
    <input type = "text" name = "fname" size = "5" required>
    </div>

    <div>
    <label for = "name">名</label>
    <input type = "text" name = "name" size = "5" required>
    </div>

    <div>
    <label for = "gender">性別</label>
    <input type = "radio" name = "gender" value = "男" >男
    <input type = "radio" name = "gender" value = "女" >女
    <input type = "radio" name = "gender" value = "不明" >不明
    </div>

    <div>
    <label for = "address">住所</label>
    <input type = "text" name = "address" size = "5">
    </div>

    <div>
    <label for = "num">電話番号</label>
    <input type = "text" name = "num[]" size = "3" pattern = "\d{2,4}" required>-
    <input type = "text" name = "num[]" size = "4" pattern = "\d{3,4}" required>-
    <input type = "text" name = "num[]" size = "4" pattern = "\d{3,4}" required>
    </div>

    <div>
    <label for = "madd">メールアドレス</label>
    <input type = "text" name = "madd[]" size = "10" required>@
    <input type = "text" name = "madd[]" size = "10" required>
    </div>

    <div>
    <label for "resource">どこで知ったか</label>
    <input type = "checkbox" name = "resource[]" value = "雑誌" >雑誌
    <input type = "checkbox" name = "resource[]" value = "新聞" >新聞
    <input type = "checkbox" name = "resource[]" value = "その他" >その他

    </div>

    <div>
    <label for "category">質問カテゴリ</label>
    <input type = "text" name = "category" size = "5" >
    </div>

    <div>
    <label for "question">質問内容<br/></label>
    <textarea name = "question" rows = "5" cols="30"></textarea>
    </div>
    <input type = "submit" name = "send" value = "送信"/>
    <input type = "reset" name = "clear" value = "クリア"/>
</form>
</body>
</center>
</html>
