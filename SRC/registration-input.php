<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/registration.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cherry+Swash:700">
    <title>登録</title>
</head>
<body>
    <h1>୨୧ Recommended Cafe ୨୧</h1>
    <hr width="90%" noshade>
    <div class="registration">
    <p>商品を追加します。　　　　　　　　　　　　　　</p>
    <form action="ren6-5-output.php" method="post">
       カフェＩＤ：<input type="number" name="id" size="5px" required="required"><br>
        カフェ名：<textarea name="name" cols="20" rows="1.9" required="required"></textarea><br>
        カテゴリーコード：<input type="number" name="category_code" size="5px" required="required"><br>
        住所：<textarea type="text" name="address" cols="25" rows="1.9" required="required"></textarea>
    <br><br>
        　　　　　　　　　　　　　　　　　　<button type="submit">追加</button>
    </div>
</body>
</html>