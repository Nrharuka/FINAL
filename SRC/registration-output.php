<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517432-shop';
    const USER = 'LAA1517432';
    const PASS = 'Pass0617';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

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
<button onclick="location.href='index.php'">トップへ戻る</button>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Cafe(cafe_id, cafe_name) values (?, ?)');
    if (!preg_match('/^\d+$/', $_POST['cafe_id'])) {
        echo 'カフェIDを整数で入力してください。';
    } else if (empty($_POST['cafe_name'])) {
        echo 'カフェ名を入力してください。';
    } else if (!preg_match('/^[0-9]+$/', $_POST['cafe_id'])) {
            echo 'カテゴリーコードを整数で入力してください。';
    } else if (empty($_POST['cafe_name'])) {
            echo '住所を入力してください。';
    } else if ($sql->execute([$_POST['cafe_id'], $_POST['cafe_name']])) {
        echo '<font color="red">追加に成功しました。</font>';
    } else {
        echo '<font color="red">追加に失敗しました。</font>';
    }
?>
    <br><hr><br>

<table border="1">
    <tr><th>カフェＩＤ</th><th>カフェ名</th><th>カテゴリーコード</th><th>住所</th></tr>

<?php
foreach ($pdo->query('select * from product') as $row) {
    echo '<tr>';
    echo '<td>', $row['cafe_id'], '</td>';
    echo '<td>', $row['cafe_name'], '</td>';
    echo '<td>', $row['category_code'], '</td>';
    echo '<td>', $row['cafe_address'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
    <br>
    <button onclick="location.href='registration-input.php'">追加画面へ戻る</button>
</body>
</html>