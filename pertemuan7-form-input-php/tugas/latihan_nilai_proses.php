<?php
    $name     = $_POST['nama'];
    $number   = $_POST['nilai'];
    $predikat = "";
    $status   = "";

    if ($number >= 85 && $number <= 100) {
        $predikat = "A";
        $status   = "Lulus";
    } elseif ($number >= 75 && $number <= 84) {
        $predikat = "B";
        $status   = "Lulus";
    } elseif ($number >= 65 && $number <= 74) {
        $predikat = "C";
        $status   = "Lulus";
    } elseif ($number >= 50 && $number <= 64) {
        $predikat = "D";
        $status   = "Lulus";
    } elseif ($number >= 0 && $number <= 49) {
        $predikat = "E";
        $status   = "Tidak Lulus";
    } else {
        $predikat = "Tidak valid";
        $status   = "-";
    }
    
    echo "<p>Nama     : $name</p>";
    echo "<p>Nilai    : $number</p>";
    echo "<p>Predikat : $predikat</p>";
    echo "<p>Status   : $status</p>";
?>