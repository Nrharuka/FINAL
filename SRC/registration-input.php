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
    <p>商品を追加します。　　　　　　　　</p>
    <form class="input" action="registration-output.php" method="post">

        <table>
            <tr>
                <th><label for="name">カフェ名：</label></th>
                <td><input class="cafe_input" id="name" name="cafe_name" required="required"></textarea></td>

            </tr>

            <tr>
                <th><label for="category_code">カテゴリー：</label></th>
                <td>
                <select class="cafe_input" id="category_code" name="category_code" required="required">
                    <option value="1">福岡市博多区</option>
                    <option value="2">福岡市天神</option>
                    <option value="3">福岡市中央区大名</option>
                    <option value="4">福岡市中央区平尾</option>
                </td>
                </select>
            </tr>

            <tr>
                <th><label for="address">住所：</label></th>
                <td><textarea id="address" name="cafe_address" cols="28" rows="3" required="required"></textarea></td>
            </tr>
        </table>

    <br><br>
    　　　　　　　　　　　　<input class="button" type="submit" value="追加"><input class="button" type="reset" value="リセット">
    </form>
    </div>
</body>
</html>