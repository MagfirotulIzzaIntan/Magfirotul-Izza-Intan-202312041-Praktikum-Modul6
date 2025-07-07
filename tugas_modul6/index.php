<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Produk - Toko Laptop</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom right, #0a2a43, #133d5a);
    color: #fff;
    margin: 0;
    padding: 20px;
}
table {
    width: 80%;
    border-collapse: collapse;
    margin: 20px auto;
}
table, th, td {
    border: 1px solid #fff;
}
th, td {
    padding: 10px;
    text-align: center;
}
a.button {
    background-color: #1e90ff;
    color: #fff;
    padding: 8px 12px;
    text-decoration: none;
    border-radius: 4px;
}
a.button:hover {
    background-color: #4682b4;
}
h1 {
    text-align: center;
}
</style>
</head>
<body>
<h1>Data Penjualan Laptop</h1>
<div style="text-align:center;">
    <a href="tambah.php" class="button">Tambah Produk Baru</a>
</div>
<table>
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo htmlspecialchars($row['nama_produk']); ?></td>
    <td>Rp <?php echo number_format($row['harga']); ?></td>
    <td><?php echo $row['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id_produk']; ?>" class="button">Edit</a>
        <a href="hapus.php?id=<?php echo $row['id_produk']; ?>" class="button" onclick="return confirm('Hapus data ini?');">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
