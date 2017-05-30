<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta cahrset = "UFT-8">

    <link rel = "stylesheet" href = "kadai-comit.css" type = "text/css">
    <title>お問合せ　入力</title>
</head>
<body>
    <form action = "kadai-comitconf.php" method = "post" onsubmit="return validate()">

        <h1>お問い合わせ</h1>
        <div class = "main">
            <div class = "fname">
                <h2>姓</h2>
                <div>
                    <input type = "text" name = "fname" size = "5" title = "必須" required>
                </div>
            </div>

            <div class = "name">
                <h2>名</h2>
                <div>
                    <input type = "text" name = "name" size = "5" title = "必須" required>
                </div>
            </div>

            <div class = "gender">
                <h2>性別</h2>
                <div>
                    <input type = "radio" name = "gender" value = "男" ><label for = "gender">男</label>
                    <input type = "radio" name = "gender" value = "女" ><label for = "gender">女</label>
                    <input type = "radio" name = "gender" value = "不明" ><label for = "gender">不明</label>
                </div>
            </div>

            <div class = "address">
                <h2>住所</h2>
                <div>
                    <input type = "text" name = "address" size = "5">
                </div>
            </div>

            <div class = "num">
                <h2>電話番号</h2>
                <div>
                    <input type = "text" name = "num[]" size = "3" pattern = "\d{2,4}" title = "２－４桁の半角数字" required> -
                    <input type = "text" name = "num[]" size = "4" pattern = "\d{3,4}" title = "３－４桁の半角数字" required> -
                    <input type = "text" name = "num[]" size = "4" pattern = "\d{3,4}" title = "３－４桁の半角数字" required>
                </div>
            </div>

                <div class = "madd">
                    <h2>メールアドレス</h2>
                    <div>
                        <input type = "text" name = "madd[]" size = "10" title = "必須" required>@
                        <input type = "text" name = "madd[]" size = "10" title = "必須" placeholder = "example.com" required>
                    </div>
                </div>

                    <div class = "resource">
                        <h2>どこで知ったか</h2>
                        <div>
                            <input type = "checkbox" name = "resource[]" value = "雑誌" >雑誌
                            <input type = "checkbox" name = "resource[]" value = "新聞" >新聞
                        </div>
                    </div>

                        <div class = "category">
                            <h2>質問カテゴリ</h2>
                            <div>
                                <select name = "category" >
                                    <option value = "商品">商品</option>
                                    <option value = "サービス">サービス</option>
                                    <option value = "その他">その他</option>
                                </select>
                            </div>
                        </div>

                        <div class = "question">
                            <h2>質問内容</h2>
                            <div>
                                <textarea name = "question" rows = "5" cols="60"></textarea>
                            </div>
                        </div>

                        <div class = "button">
                            <input type = "submit" name = "send" value = "確認"/>
                        </div>

                        <div class = "button2">
                            <input type = "reset" name = "clear" value = "クリア"/>
                        </div>

                    </div>
                </form>
            </body>
            </html>
