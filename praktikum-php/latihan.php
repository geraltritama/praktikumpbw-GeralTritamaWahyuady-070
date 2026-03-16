<?php
    echo "Toko Electronik Geral";
    echo "<hr>";

    define ("pajak", 0.1);

    $namaBarang = "Keyboard";
    $hargaBarang = [150000];
    $jumlahBeli = 2;
    $totalHargaSebelumPajak = $hargaBarang[0] * $jumlahBeli;
    $pajak = $totalHargaSebelumPajak * pajak;
    $totalHarga = $totalHargaSebelumPajak + $pajak;

    echo "Nama barang: " . $namaBarang . "<br>";
    echo "Harga Satuan: " . "Rp " . $hargaBarang[0] . "<br>";
    echo "Jumlah Beli: " . $jumlahBeli . "<br>";
    echo "Total Harga (Sebelum Pajak): " . "Rp " . $totalHargaSebelumPajak . "<br>";
    echo "Pajak (10%): " . "Rp " . $pajak . "<br>";
    echo "<b>Total Bayar: </b>" . "Rp " . $totalHarga . "<br>";
?>