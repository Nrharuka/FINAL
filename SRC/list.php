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
    <h1>୨୧ Recommended Cafe ୨୧</h1>
    <hr width="90%" noshade>
    <h1 class="list">一覧</h1>
<table>
    <?php
        $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517432-final;charset=utf8','LAA1517432','Pass0617');
        foreach ($pdo->query('select * from Cafe') as $row) {
            echo '<p>';
            echo '<div class="name">';
            echo '꒰⑅ ', $row['cafe_name'], ' ⑅꒱';
            echo '</div>';
            echo '　　';
            echo '<div class="address">';
            echo $row['cafe_address'];
            echo '</div>';
            echo '</p>';
            echo '<hr>';
        }
    ?>
</table>
</body>
</html>