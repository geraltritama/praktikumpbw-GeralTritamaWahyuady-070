<?php
$jumlahRoda = 4;
$jenis = "";

switch ($jumlahRoda) {
    case 2:
        $jenis = "Motor/Sepeda";
        break;
    case 3:
        $jenis = "Bentor/Tossa";
        break;
    case 4:
        $jenis = "Mobil/Truk Kecil";
        break;
    default:
        $jenis = "Kendaraan Khusus";
}
echo "Jumlah roda $jumlahRoda: $jenis";
?>
