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
    <table border="1">
    <tr><th>カフェＩＤ</th><th>カフェ名</th><th>カテゴリーコード</th><th>住所</th></tr>
    <?php
        $pdo = new PDO($connect, USER, PASS);
        foreach ($pdo->query('select * from Cafe') as $row) {
            echo '<p>';
            echo '<tr>';
            echo '<td>', $row['cafe_id'], '</td>';
            echo '<td>', $row['cafe_name'], '</td>';
            echo '<td>', $row['category_code'], '</td>';
            echo '<td>', $row['cafe_address'], '</td>';
            echo '<td>', '<a href="delete-output.php?id=',$row['cafe_id'], '">削除</a>', '</td>';
            echo '</tr>';
            echo '</p>';
            echo "\n";
        }
    ?>
    </table>
    </body>
</html>