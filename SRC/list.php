<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/list.css">
    <title>一覧</title>
</head>
<body>
    <p>一覧</p>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517432-final;charset=utf8','LAA1517432','Pass0617');
    foreach ($pdo->query('select * from Cafe') as $row) {
        echo '<p>';
        echo $row['cafe_name'];
        echo '　　';
        echo $row['cafe_address'];
        echo '</p>';
    }
?>
</body>
</html>