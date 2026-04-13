<?php
// Perulangan dengan for loop
// Struktur for loop: for (inisialisasi; kondisi; increment/decrement) { // kode yang akan diulang }
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-$i <br>";
}

echo "<br>";

$buah = ["apel", "jeruk", "mangga"];
for ($i = 0; $i < count($buah); $i++) {
    echo "Buah ke-$i adalah " . $buah[$i] . "<br>";
}

?>