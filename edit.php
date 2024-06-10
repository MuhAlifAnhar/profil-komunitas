<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * from peminjaman where id_pinjam = '$id' limit 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result[0]['id_pinjam'] ?>">
        <label for="">Id Pinjam</label><br/>
        <input type="text" name="id_pinjam" value="<?php echo $result[0]['id_pinjam']?>"/>
        <br/><br/>

        <label for="">Nim Mahasiswa</label><br/>
        <input type="text" name="nim_mhs" value="<?php echo $result[0]['nim_mhs'] ?>">
        <br/><br/>

        <label for="">Id Petugas</label><br/>
        <input type="text" name="id_petugas" value="<?php echo $result[0]['id_petugas'] ?>">
        <br/><br/>

        <label for="">Kode Buku</label><br/>
        <input type="text" name="kode_buku" value="<?php echo $result[0]['kode_buku'] ?>">
        <br/><br/>

        <label for="">Tanggal Peminjaman</label><br/>
        <input type="date" name="tanggal_peminjaman" value="<?php echo $result[0]['tanggal_peminjaman'] ?>">
        <br/><br/>

        <label for="">Tanggal Pengembalian</label><br/>
        <input type="date" name="tanggal_pengembalian" value="<?php echo $result[0]['tanggal_pengembalian'] ?>">
        <br/><br/>

        <button type="submit">Perbarui</button>

    </form>
</body>
</html>