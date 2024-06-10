<?php
include('koneksi.php');
$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE from peminjaman where id_pinjam = '$id'");

if($delete){
    header('location: list.php');
}else{
    echo "Hapus data gagal";
}
?>