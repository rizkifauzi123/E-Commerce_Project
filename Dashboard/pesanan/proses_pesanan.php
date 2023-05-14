<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_kategori = $_POST['pakaian_id'];
   $_jumlah = $_POST['quantity'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 1
   $ar_data[]=$_kategori; // ? 2
   $ar_data[]=$_jumlah;// 3
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,pakaian_id,quantity) VALUES (?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,pakaian=?,quantity=?
    WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pesanan.php');
?>