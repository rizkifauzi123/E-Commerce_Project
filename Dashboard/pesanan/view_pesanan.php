<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>    <td>ID</td><td><?=$row['id']?></td></tr>
        <tr>    <td>Tanggal Masuk</td><td><?=$row['tanggal']?></td></tr>
        <tr>    <td>Kategori</td><td><?=$row['pakaian_id']?></td></tr>
        <tr>    <td>Jumlah Pesanan</td><td><?=$row['quantity']?></td></tr>
    </tbody>
</table>