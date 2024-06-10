<?php
include('koneksi.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($koneksi, "SELECT * FROM peminjaman where id_pinjam = '$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Tambah Data</a>
    <br/><br/>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword. ." value="<?php echo $_GET['keyword'] ?>"/>
        <button type="submit">Search</button>
    </form>
    <br/>

    <table border="">
        <tr>
            <th>Id Pinjam</th>
            <th>Nim Mahasiswa</th>
            <th>Id Petugas</th>
            <th>Kode Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach($results as $result) :?>
        <tr>
            <th><?php echo $result['id_pinjam'] ?></th>
            <th><?php echo $result['nim_mhs'] ?></th>
            <th><?php echo $result['id_petugas'] ?></th>
            <th><?php echo $result['kode_buku'] ?></th>
            <th><?php echo $result['tanggal_peminjaman'] ?></th>
            <th><?php echo $result['tanggal_pengembalian'] ?></th>
            <th>
                <a href="edit.php?id=<?php echo $result['id_pinjam'] ?>">Edit</a>
                <a href="delete.php?id=<?php echo $result['id_pinjam'] ?>">Delete</a>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>