<?php
$jumlahRoda = isset($_GET['roda']) ? (int) $_GET['roda'] : 2;

switch ($jumlahRoda) {
    case 2:
        $kendaraan = 'Sepeda / Motor';
        break;
    case 3:
        $kendaraan = 'Becak / Bajaj';
        break;
    case 4:
        $kendaraan = 'Mobil';
        break;
    case 6:
        $kendaraan = 'Truk';
        break;
    case 8:
        $kendaraan = 'Bus';
        break;
    case 10:
        $kendaraan = 'Traktor';
        break;
    case 12:
        $kendaraan = 'Truk Besar';
        break;
    case 14:
        $kendaraan = 'Truk Kontainer';
        break;
    case 16:
        $kendaraan = 'Truk Gandeng';
        break;
    case 18:
        $kendaraan = 'Truk Trailer';
        break;
    default:
        $kendaraan = 'Jenis kendaraan tidak tersedia';
}
?>

<section class="panel">
    <form method="get">
        <input type="hidden" name="page" value="switch-kendaraan">
        <div class="form-grid">
            <div>
                <label for="roda">Jumlah roda</label>
                <input type="number" name="roda" id="roda" min="1" value="<?php echo htmlspecialchars((string) $jumlahRoda, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div>
                <button type="submit">Tentukan Kendaraan</button>
            </div>
        </div>
    </form>
</section>

<section class="result">
    <p><strong>Input jumlah roda:</strong> <?php echo htmlspecialchars((string) $jumlahRoda, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Hasil switch:</strong> <?php echo htmlspecialchars($kendaraan, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Logika:</strong> <code>switch</code> digunakan untuk mencocokkan jumlah roda dengan jenis kendaraan.</p>
</section>
