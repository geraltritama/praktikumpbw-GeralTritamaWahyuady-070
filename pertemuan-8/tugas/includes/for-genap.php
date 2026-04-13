<?php
$awal = isset($_GET['awal']) ? (int) $_GET['awal'] : 2;
$akhir = isset($_GET['akhir']) ? (int) $_GET['akhir'] : 10;
$bilanganGenap = [];

if ($awal > $akhir) {
    [$awal, $akhir] = [$akhir, $awal];
}

for ($i = $awal; $i <= $akhir; $i++) {
    if ($i % 2 === 0) {
        $bilanganGenap[] = $i;
    }
}
?>

<section class="panel">
    <form method="get">
        <input type="hidden" name="page" value="for-genap">
        <div class="form-grid">
            <div>
                <label for="awal">Angka awal</label>
                <input type="number" name="awal" id="awal" value="<?php echo htmlspecialchars((string) $awal, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div>
                <label for="akhir">Angka akhir</label>
                <input type="number" name="akhir" id="akhir" value="<?php echo htmlspecialchars((string) $akhir, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div>
                <button type="submit">Tampilkan Bilangan Genap</button>
            </div>
        </div>
    </form>
</section>

<section class="result">
    <p><strong>Rentang angka:</strong> <?php echo htmlspecialchars((string) $awal, ENT_QUOTES, 'UTF-8'); ?> sampai <?php echo htmlspecialchars((string) $akhir, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Hasil perulangan for:</strong></p>
    <ul class="badge-list">
        <?php foreach ($bilanganGenap as $angka): ?>
            <li><?php echo htmlspecialchars((string) $angka, ENT_QUOTES, 'UTF-8'); ?></li>
        <?php endforeach; ?>
    </ul>
</section>
