<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/list.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cherry+Swash:700">
    <title>一覧</title>
</head>
<body>
    <div class="header-container">
        <a href="index.php" class="arrow-link"> ＜＜ </a>
        <h1>୨୧ Recommended Cafe ୨୧</h1>
    </div>
        <hr width="90%" noshade>
    <br>
    <h1 class="list">一覧</h1>

<table>
    <?php
        $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517432-final;charset=utf8','LAA1517432','Pass0617');
        $i = 1;
        foreach ($pdo->query('select * from Cafe') as $row) {
            echo '<p>';
            echo '　';
            echo '<div class="name_box">';
            echo '<div class="name">';
            echo '꒰⑅ ', $row['cafe_name'], ' ⑅꒱';
            echo '</div>';
            echo '</div>';
            echo '　　';
            echo '<div class="cafe">';

        // 画像ファイル名を構築
        $imageFileName = 'cafe' . $i . '.jpg';

        // 画像が存在するか確認してから表示
        if (file_exists('IMG/' . $imageFileName)) {
            echo '<img class="cafe_img" src="IMG/' . $imageFileName . '" alt="　" />';
        } else {
                echo '<span>画像なし</span>';
        }
            echo '</div>';
            echo '　　';
            echo '<div class="address_box">';
            echo '<div class="address">';
            echo $row['cafe_address'];
            echo '</div>';
            echo '</div>';
            echo '　';
            echo '</p>';
            echo '<hr>';

        // 画像番号を増やす
        $i++;

        }
    ?>
</table>
</body>
</html>