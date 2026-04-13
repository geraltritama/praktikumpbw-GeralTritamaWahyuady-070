<?php
$inputHewan = trim($_GET['hewan'] ?? 'Kucing, Anjing, Kelinci, Gajah, Harimau');
$daftarHewan = array_filter(array_map('trim', explode(',', $inputHewan)));
?>

<section class="panel">
    <form method="get">
        <input type="hidden" name="page" value="foreach-hewan">
        <div class="form-grid">
            <div style="grid-column: 1 / -1;">
                <label for="hewan">Daftar hewan (pisahkan dengan koma)</label>
                <input type="text" name="hewan" id="hewan" value="<?php echo htmlspecialchars($inputHewan, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div>
                <button type="submit">Tampilkan Daftar</button>
            </div>
        </div>
    </form>
</section>

<section class="result">
    <p><strong>Hasil foreach:</strong></p>
    <ul class="badge-list">
        <?php foreach ($daftarHewan as $hewan): ?>
            <li><?php echo htmlspecialchars($hewan, ENT_QUOTES, 'UTF-8'); ?></li>
        <?php endforeach; ?>
    </ul>
</section>
