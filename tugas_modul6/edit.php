<?php
include 'koneksi.php';
$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=$id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Data tidak ditemukan.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $harga = intval($_POST['harga']);
    $stok = intval($_POST['stok']);

    $query = "UPDATE produk SET nama_produk='$nama', harga='$harga', stok='$stok' WHERE id_produk=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Produk</title>
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
<h2 style="text-align:center;">Edit Produk</h2>
<form method="post">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" value="<?php echo htmlspecialchars($data['nama_produk']); ?>" required>
    <label>Harga</label>
    <input type="number" name="harga" value="<?php echo $data['harga']; ?>" required>
    <label>Stok</label>
    <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required>
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
