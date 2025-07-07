<!DOCTYPE html>
<html>

<head>
<title>Latihan Kondisi PHP</title>
</head>

<body>
<h1>Cek Nilai</h1>
<?php
$nilai = 85;
echo "<p>Nilai Anda: $nilai</p>";

if ($nilai > 90) {
    echo "<p style='color:green;'>Kategori: Sangat Baik</p>";
} elseif ($nilai > 80) {
    echo "<p style='color:blue;'>Kategori: Baik</p>";
} elseif ($nilai > 70) {
    echo "<p style='color:orange;'>Kategori: Cukup</p>";
} else {
    echo "<p style='color:red;'>Kategori: Kurang</p>";
}
?>
</body>

</html>
