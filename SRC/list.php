<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517432-FINAL';
    const USER = 'LAA1517432';
    const PASS = 'Pass0617';

    $connect = 'mysql:host=' . SERVER . ';dbname=' . DBNAME . ';charset=utf8';
?>

<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<form action="product.php" method="post">
商品検索
<input type="text" name="keyword">
<input type="submit" value="検索">
</form>
<hr>
<?php
    echo '<table>';
    echo '<tr><th>カフェID</th><th>カフェ名</th><th>カテゴリ</th><th>住所</th></tr>';
    $pdo=new PDO($connect,USER,PASS);
if (isset($_REQUEST['keyword'])) {
    $sql=$pdo->prepare('select * from Cafe where cafe_id like ?');

    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
    $sql=$pdo->query('select * from Cafe');
}

foreach ($sql as $row) {
    $id=$row['cafe_id'];
    echo '<tr>';
    echo '<td>',$id,'</td>';
    echo '<td>';
    echo '<a href="detail.php?id=', $id, '">', $row['cafe_name'], '</a>';
    echo '</td>';
    echo '</tr>';
}
    echo '</table>';
?>

<?php require 'footer.php'; ?>