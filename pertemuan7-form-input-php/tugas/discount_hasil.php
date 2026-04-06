<?php
    $npm       = $_POST['NPM'];
    $nama      = $_POST['nama'];
    $prodi     = $_POST['prodi'];
    $semester  = $_POST['semester'];
    $biaya_ukt = $_POST['biaya_ukt'];
    $diskon    = "";
    $bayar     = "";

    if ($biaya_ukt >= 5000000 && $semester > 8) {
        $diskon = 15;
    } elseif ($biaya_ukt >= 5000000 && $semester <= 8) {
        $diskon = 10;
    } else {
        $diskon = 0;
    }

    $bayar = $biaya_ukt - ($biaya_ukt * $diskon / 100);

    echo "<b>Hasil:</b><br>";
    echo "<b>NPM :</b> $npm <br>";
    echo "<b>Nama :</b> $nama <br>";
    echo "<b>Prodi :</b> $prodi <br>";
    echo "<b>Semester :</b> $semester <br>";
    echo "<b>Biaya UKT :</b> Rp $biaya_ukt <br>";
    echo "<b>Diskon :</b> $diskon% <br>";
    echo "<b>Total Bayar :</b> Rp $bayar <br>";
?>