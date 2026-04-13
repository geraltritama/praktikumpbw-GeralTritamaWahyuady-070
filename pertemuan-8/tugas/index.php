<?php
$pages = [
    'switch-kendaraan' => [
        'title' => 'Soal 1 - Switch Kendaraan',
        'file' => __DIR__ . '/includes/switch-kendaraan.php',
        'description' => 'Menentukan jenis kendaraan berdasarkan jumlah roda.',
    ],
    'for-genap' => [
        'title' => 'Soal 2 - For Bilangan Genap',
        'file' => __DIR__ . '/includes/for-genap.php',
        'description' => 'Mencetak bilangan genap dengan perulangan for.',
    ],
    'foreach-hewan' => [
        'title' => 'Soal 3 - Foreach Daftar Hewan',
        'file' => __DIR__ . '/includes/foreach-hewan.php',
        'description' => 'Menampilkan daftar nama hewan menggunakan foreach.',
    ],
    'ternary-genap-ganjil' => [
        'title' => 'Soal 4 - Ternary Genap Ganjil',
        'file' => __DIR__ . '/includes/ternary-genap-ganjil.php',
        'description' => 'Menentukan angka genap atau ganjil dengan operator ternary.',
    ],
];

$currentPage = $_GET['page'] ?? 'switch-kendaraan';

if (!isset($pages[$currentPage])) {
    $currentPage = 'switch-kendaraan';
}

$currentConfig = $pages[$currentPage];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="hero">
            <p class="eyebrow">Pertemuan 8 PHP</p>
            <h1>Navigasi Tugas Dinamis</h1>
            <p class="subtitle">
                Setiap soal dipisahkan ke file <code>include</code> dan ditampilkan melalui navigasi dinamis.
            </p>
        </header>

        <nav class="nav-grid">
            <?php foreach ($pages as $slug => $page): ?>
                <a
                    href="?page=<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"
                    class="nav-card <?php echo $currentPage === $slug ? 'active' : ''; ?>"
                >
                    <strong><?php echo htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
                    <span><?php echo htmlspecialchars($page['description'], ENT_QUOTES, 'UTF-8'); ?></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <main class="content-card">
            <div class="content-head">
                <h2><?php echo htmlspecialchars($currentConfig['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p><?php echo htmlspecialchars($currentConfig['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <?php include $currentConfig['file']; ?>
        </main>
    </div>
</body>
</html>
