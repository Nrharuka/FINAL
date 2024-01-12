<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517432-FINAL';
    const USER = 'LAA1517432';
    const PASS = 'Pass0617';

    $connect = 'mysql:host=' . SERVER . ';dbname=' . DBNAME . ';charset=utf8';
?>

<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from product where id=?');
    $sql->execute([$_GET['id']]);
    foreach ($sql as $row) {
        echo '<p><img alt="image" src="image/', $row['id'],'.jpg" width="auto" height="200px"></p>';
        echo '<form action="cart-insert.php" method="post">';
        echo '<p>カフェID：',$row['cafe_id'], '</p>';
        echo '<p>カフェ名：',$row['cafe_name'], '</p>';

    for ($i=1; $i<=10; $i++) {
        echo '<option value="', $i, '">', $i, '</option>';
    }
        echo '</select></p>';
    }
?>

<?php require 'footer.php'; ?>