<?php
$angka = isset($_GET['angka']) ? (int) $_GET['angka'] : 7;
$hasil = ($angka % 2 === 0) ? 'Genap' : 'Ganjil';
?>

<section class="panel">
    <form method="get">
        <input type="hidden" name="page" value="ternary-genap-ganjil">
        <div class="form-grid">
            <div>
                <label for="angka">Masukkan angka</label>
                <input type="number" name="angka" id="angka" value="<?php echo htmlspecialchars((string) $angka, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div>
                <button type="submit">Cek Angka</button>
            </div>
        </div>
    </form>
</section>

<section class="result">
    <p><strong>Angka yang dicek:</strong> <?php echo htmlspecialchars((string) $angka, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Hasil ternary:</strong> Bilangan tersebut adalah <strong><?php echo htmlspecialchars($hasil, ENT_QUOTES, 'UTF-8'); ?></strong>.</p>
    <p><code>($angka % 2 === 0) ? 'Genap' : 'Ganjil';</code></p>
</section>
