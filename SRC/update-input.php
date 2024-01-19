<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517432-final';
    const USER = 'LAA1517432';
    const PASS = 'Pass0617';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cherry+Swash:700">
    <link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/update.css">
	<title>更新</title>
</head>
<body>
    <div class="header-container">
        <a href="index.php" class="arrow-link"> ＜＜ </a>
        <h1>୨୧ Recommended Cafe ୨୧</h1>
    </div>
        <hr width="90%" noshade>
    <br>
<?php
    $pdo = new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from Cafe') as $row) {
        echo '<form action="update-output.php" method="post">';
        echo '<input type="hidden" name="cafe_id" value="' . $row['cafe_id'] . '">';
        echo '<p>';
        echo '<table>';
        echo '<tr>';
        echo '<th><label for="cafe_name">カフェ名</label></th>';
        echo '<td><input class="cafe_input" id="cafe_name" name="cafe_name" value="', $row['cafe_name'], '"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="category_code">カテゴリー</label></th>';
        echo '<td>';
        echo '<select class="cafe_input" id="category_code" name="category_code" required="required">';
        echo '<option value="1" ', ($row['category_code'] == 1) ? 'selected' : '', '>福岡市博多区</option>';
        echo '<option value="2" ', ($row['category_code'] == 2) ? 'selected' : '', '>福岡市天神</option>';
        echo '<option value="3" ', ($row['category_code'] == 3) ? 'selected' : '', '>福岡市中央区大名</option>';
        echo '<option value="4" ', ($row['category_code'] == 4) ? 'selected' : '', '>福岡市中央区平尾</option>';
        echo '</select>';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="address">住所</label></th>';
        echo '<td><textarea id="address" name="cafe_address" cols="28" rows="3" required="required">', $row['cafe_address'], '</textarea></td>';
        echo '</table>';
        echo '<br>';
        echo '<td>　　　　　　　　　　　　　　　　<input class="button" type="submit" value="更新"><td><br><br>';
        echo '</p>';
        echo '</form>';
        echo "\n";
    }
?>
</body>
</html>