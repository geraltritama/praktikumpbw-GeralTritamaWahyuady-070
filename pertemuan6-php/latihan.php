<?php
define("PAJAK", 0.1);

$namaBarang = "Keyboard";
$hargaBarang = 150000;
$jumlahBeli = 2;
$totalHargaSebelumPajak = $hargaBarang * $jumlahBeli;
$pajak = $totalHargaSebelumPajak * PAJAK;
$totalHarga = $totalHargaSebelumPajak + $pajak;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik Geral</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .title {
            text-align: center;
            color: #1f3c88;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e5e7eb;
            color: #333;
        }

        .item.total {
            border-bottom: none;
            margin-top: 10px;
            font-weight: bold;
            color: #1f3c88;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="title">Toko Elektronik Geral</h1>
        <p class="subtitle">Detail Pembelian Barang</p>

        <div class="item">
            <span>Nama Barang</span>
            <span><?= $namaBarang; ?></span>
        </div>
        <div class="item">
            <span>Harga Satuan</span>
            <span>Rp <?= number_format($hargaBarang, 0, ',', '.'); ?></span>
        </div>
        <div class="item">
            <span>Jumlah Beli</span>
            <span><?= $jumlahBeli; ?></span>
        </div>
        <div class="item">
            <span>Total Sebelum Pajak</span>
            <span>Rp <?= number_format($totalHargaSebelumPajak, 0, ',', '.'); ?></span>
        </div>
        <div class="item">
            <span>Pajak 10%</span>
            <span>Rp <?= number_format($pajak, 0, ',', '.'); ?></span>
        </div>
        <div class="item total">
            <span>Total Bayar</span>
            <span>Rp <?= number_format($totalHarga, 0, ',', '.'); ?></span>
        </div>
    </div>
</body>
</html>
