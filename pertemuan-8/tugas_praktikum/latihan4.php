<h2>Soal 4: Cek Genap atau Ganjil (Ternary Operator)</h2>
<p>Masukan angka berapapun, program akan mengecek apakah nilai terebut <strong>Genap</strong> atau <strong>Ganjil</strong> menggunakan <code>Ternary Operator</code>.</p>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="4">
    <label for="angka">Masukkan Sebuah Angka:</label>
    <input type="number" id="angka" name="angka" placeholder="Misalnya: 15, 20" required>
    <button type="submit">Cek Angka</button>
</form>

<?php
if (isset($_GET['angka'])) {
    $angka = (int)$_GET['angka'];
    
    // Implementasi Ternary Operator s
    // Format: (kondisi) ? nilai_jika_benar : nilai_jika_salah;
    $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    
    echo "<div class='hasil-box'>";
    echo "<h3>Hasil Pengecekan:</h3>";
    echo "<p>Angka yang dimasukkan adalah <strong>$angka</strong>.</p>";
    echo "<p>Angka <strong>$angka</strong> merupakan bilangan <span style='font-size: 1.2em; font-weight: bold; color: #e8491d;'>$status</span>.</p>";
    echo "</div>";
}
?>
