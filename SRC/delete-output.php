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
        <link rel="stylesheet" href="CSS/delete.css">
		<title>削除</title>
	</head>
	<body>
    <div class="header-container">
            <a href="index.php" class="arrow-link"> ＜＜ </a>
            <h1>୨୧ Recommended Cafe ୨୧</h1>
        </div>
            <hr width="90%" noshade>
        <br>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Cafe where cafe_id=?');
    if ($sql->execute([$_GET['id']])) {
        echo '<font color="red">削除に成功しました。</font>';
    }else{
        echo '<font color="red">削除に失敗しました。</font>';
    }
?>
    <br><br>
    <table border="1">
    <tr><th>カフェＩＤ</th><th>カフェ名</th><th>カテゴリーコード</th><th>住所</th></tr>
<?php
    foreach ($pdo->query('select * from Cafe') as $row) {
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
    <form action="delete-input.php" method="post">
        <button class="button" type="submit">削除画面へ戻る</button>
    </form>
    </body>
</html>
