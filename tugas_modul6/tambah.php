<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $harga = intval($_POST['harga']);
    $stok = intval($_POST['stok']);

    $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom right, #0a2a43, #133d5a);
    color: #fff;
    padding: 20px;
}
form {
    width: 300px;
    margin: auto;
}
input[type=text], input[type=number] {
    width: 100%;
    padding: 8px;
    margin: 6px 0;
}
button {
    background-color: #1e90ff;
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
}
button:hover {
    background-color: #4682b4;
}
a {
    color: #fff;
    display: block;
    text-align: center;
    margin-top: 10px;
}
</style>
</head>
<body>
<h2 style="text-align:center;">Tambah Produk</h2>
<form method="post">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" required>
    <label>Harga</label>
    <input type="number" name="harga" required>
    <label>Stok</label>
    <input type="number" name="stok" required>
    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
