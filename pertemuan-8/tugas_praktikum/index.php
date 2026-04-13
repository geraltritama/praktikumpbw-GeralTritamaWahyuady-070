<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Latihan Praktikum PHP Dinamis</h1>
        </div>
    </header>

    <?php include 'nav.php'; ?>

    <div class="container content">
        <?php
        // Mengambil parameter page dari URL, jika tidak ada set default ke 'home'
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Menggunakan switch 
        switch ($page) {
            case '1':
                include 'latihan1.php';
                break;
            case '2':
                include 'latihan2.php';
                break;
            case '3':
                include 'latihan3.php';
                break;
            case '4':
                include 'latihan4.php';
                break;
            default:
                echo "<h2>Selamat Datang! 👋</h2>
                      <p>Ini adalah web PHP untuk memenuhi tugas praktikum :D</p>
                      <p>Silakan pilih menu navigasi di atas untuk melihat jawaban Latihan Praktikum:</p>
                      <ul>
                        <li><strong>Soal 1</strong>: Menentukan jenis kendaraan (Switch)</li>
                        <li><strong>Soal 2</strong>: Mencetak bilangan genap (For)</li>
                        <li><strong>Soal 3</strong>: Menampilkan array hewan (Foreach)</li>
                        <li><strong>Soal 4</strong>: Cek ganjil/genap (Ternary Operator)</li>
                      </ul>";
                break;
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
