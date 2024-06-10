<?php
include('koneksi.php');

$id = $_POST['id_pinjam'];
$nim = $_POST['nim_mhs'];
$petugas = $_POST['id_petugas'];
$buku = $_POST['kode_buku'];
$peminjaman = $_POST['tanggal_peminjaman'];
$pengembalian = $_POST['tanggal_pengembalian'];
$pinjam = $_POST['id_pinjam'];

$update = mysqli_query($koneksi, "UPDATE peminjaman SET id_pinjam='$pinjam', nim_mhs='$nim', id_petugas='$petugas', kode_buku='$buku', tanggal_peminjaman='$peminjaman', tanggal_pengembalian='$pengembalian' where id_pinjam='$id' ");

if($update){
    header('location: list.php');
}else{
    echo "Update data gagal";
}

?>