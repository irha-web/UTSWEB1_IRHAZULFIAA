<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$kode_barang = ["BRG001", "BRG002", "BRG003", "BRG004", "BRG005"];
$nama_barang = ["Sabun", "Shampoo", "Pasta Gigi", "Tissue", "Minyak Goreng"];
$harga_barang = [5000, 12000, 8000, 6000, 20000];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - POLGAN MART</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; }
        table { border-collapse: collapse; width: 70%; margin: 30px auto; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background: #ddd; }
        h2, h3 { text-align: center; }
        .logout { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>-- POLGAN MART --</h2>
    <h3>Selamat Datang, <?= $_SESSION['username']; ?></h3>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <?php
    // Commit 6 – Logika Penjualan Random
    $beli = [];
    $jumlah = [];
    $total = [];
    $grandtotal = 0;

    for ($i = 0; $i < 5; $i++) {
        $beli[$i] = $nama_barang[$i];
        $jumlah[$i] = rand(1, 5);
        $total[$i] = $harga_barang[$i] * $jumlah[$i];
        $grandtotal += $total[$i];
    }
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>