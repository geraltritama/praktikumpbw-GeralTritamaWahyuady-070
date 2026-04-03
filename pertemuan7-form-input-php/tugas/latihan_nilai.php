<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="">Masukan Nama:</label>
        <input type="text" name="nama"> <br><br>

        <label for="">Masukan Nilai:</label>
        <input type="number" name="nilai"> <br><br>

        <button type="submit">Submit</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
?>
</body>
</html>