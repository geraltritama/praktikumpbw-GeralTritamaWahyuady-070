<h2>Soal 1: Menentukan Jenis Kendaraan (Switch)</h2>
<p>Program untuk menentukan jenis kendaraan berdasarkan jumlah roda menggunakan perintah <code>switch</code>.</p>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="1">
    <label for="roda">Masukkan Jumlah Roda:</label>
    <input type="number" id="roda" name="roda" min="1" max="20" placeholder="Misal: 2, 4, 6" required>
    <button type="submit">Cek Kendaraan</button>
</form>

<?php
if (isset($_GET['roda'])) {
    $roda = (int)$_GET['roda'];
    $jenis = "";
    
    // Implementasi Switch Case 
    switch ($roda) {
        case 1:
            $jenis = "Sepeda Roda Satu (Unicycle)";
            break;
        case 2:
            $jenis = "Sepeda atau Sepeda Motor";
            break;
        case 3:
            $jenis = "Becak, Bajaj, atau Bemo";
            break;
        case 4:
            $jenis = "Mobil atau Quadbike";
            break;
        case 6:
            $jenis = "Truk Engkel / Bus Kecil";
            break;
        case 8:
            $jenis = "Truk Tronton / Bus Besar";
            break;
        case 10:
            $jenis = "Truk Tronton / Bus Besar";
            break;
        case 12:
            $jenis = "Truk Tronton / Bus Besar";
            break;
        default:
            $jenis = "Kendaraan khusus / modifikasi / anomali yang tidak lazim di jalanan umum.";
            break;
    }
    
    echo "<div class='hasil-box'>";
    echo "<h3>Hasil Identifikasi:</h3>";
    echo "<p>Jumlah roda yang diinputkan adalah: <strong>$roda</strong></p>";
    echo "<p>Kendaraan dengan $roda roda biasanya masuk dalam kategori <strong>$jenis</strong>.</p>";
    echo "</div>";
}
?>
