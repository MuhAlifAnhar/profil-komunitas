<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="">Id Pinjam</label><br/>
        <input type="text" name="id_pinjam"/>
        <br/><br/>

        <label for="">Nim Mahasiswa</label><br/>
        <input type="text" name="nim_mhs">
        <br/><br/>

        <label for="">Id Petugas</label><br/>
        <input type="text" name="id_petugas">
        <br/><br/>

        <label for="">Kode Buku</label><br/>
        <input type="text" name="kode_buku">
        <br/><br/>

        <label for="">Tanggal Peminjaman</label><br/>
        <input type="date" name="tanggal_peminjaman">
        <br/><br/>

        <label for="">Tanggal Pengembalian</label><br/>
        <input type="date" name="tanggal_pengembalian">
        <br/><br/>

        <button type="submit">Tambah</button>

    </form>
</body>
</html>