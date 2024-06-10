<?php
include('koneksi.php');

$pinjam = $_POST['id_pinjam'];
$nim = $_POST['nim_mhs'];
$petugas = $_POST['id_petugas'];
$buku = $_POST['kode_buku'];
$peminjaman = $_POST['tanggal_peminjaman'];
$pengembalian = $_POST['tanggal_pengembalian'];

$insert = mysqli_query($koneksi, "INSERT INTO peminjaman SET id_pinjam='$pinjam', nim_mhs='$nim', id_petugas='$petugas', kode_buku='$buku', tanggal_peminjaman='$peminjaman', tanggal_pengembalian='$pengembalian' ");
if($insert){
    header('location:list.php');
}else{
    echo "input data gagal";
}

?>