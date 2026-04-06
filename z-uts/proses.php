<?php
// pajak 15% dari subtotal
define('PAJAK', 0.15);

// harga barang dengan array
$harga_barang = [
    "Buku" => 12000,
    "Alat Tulis" => 8000,
    "Seragam" => 150000,
    "Perlengkapan Olahraga" => 95000
];

// mengambil data dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$jenis_layanan = $_POST['jenis_layanan'];
$barang = isset($_POST['barang']) ? $_POST['barang'] : [];
$jumlah_barang = $_POST['jumlah_barang'];

// untuk perhitungan
$subtotal = 0;
$pajak = 0;
$biaya_layanan = 0;
$total_akhir = 0;
$status = "";

// perhitungan biaya layanan yang di pilih sama si user
if ($jenis_layanan == "reguler") {
    $biaya_layanan = 0;
} elseif ($jenis_layanan == "prioritas") {
    $biaya_layanan = 10000;
} else {
    $biaya_layanan = 0;
}

// perhitungan subtotal berdasarkan barang yang dipilih dan jumlah barang
if (in_array("Buku", $barang)) {
    $subtotal = $subtotal + ($harga_barang["Buku"] * $jumlah_barang);
}

if (in_array("Alat Tulis", $barang)) {
    $subtotal = $subtotal + ($harga_barang["Alat Tulis"] * $jumlah_barang);
}

if (in_array("Seragam", $barang)) {
    $subtotal = $subtotal + ($harga_barang["Seragam"] * $jumlah_barang);
}

if (in_array("Perlengkapan Olahraga", $barang)) {
    $subtotal = $subtotal + ($harga_barang["Perlengkapan Olahraga"] * $jumlah_barang);
}

// perhitungan pajak dan total akhir
$pajak = $subtotal * PAJAK;
$total_akhir = $subtotal + $pajak + $biaya_layanan;

// penentuan status pemesanan
if (count($barang) == 0) {
    $status = "Tidak ada barang yang dipilih";
} else {
    $status = "Pemesanan anda berhasil :D";
}
?>

<!-- TAMPILAN RINGKASAN HTML -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Ringkasan Pemesanan</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><?php echo $npm; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Jenis Layanan</td>
            <td><?php echo $jenis_layanan; ?></td>
        </tr>
        <tr>
            <td>Daftar Item Dipilih</td>
            <td>
                <?php
                if (count($barang) == 0) {
                    echo "Tidak ada barang yang dipilih";
                } else {
                    if (in_array("Buku", $barang)) {
                        echo "Buku - " . $jumlah_barang . " x Rp " . $harga_barang["Buku"] . "<br>";
                    }

                    if (in_array("Alat Tulis", $barang)) {
                        echo "Alat Tulis - " . $jumlah_barang . " x Rp " . $harga_barang["Alat Tulis"] . "<br>";
                    }

                    if (in_array("Seragam", $barang)) {
                        echo "Seragam - " . $jumlah_barang . " x Rp " . $harga_barang["Seragam"] . "<br>";
                    }

                    if (in_array("Perlengkapan Olahraga", $barang)) {
                        echo "Perlengkapan Olahraga - " . $jumlah_barang . " x Rp " . $harga_barang["Perlengkapan Olahraga"] . "<br>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Subtotal</td>
            <td>Rp <?php echo $subtotal; ?></td>
        </tr>
        <tr>
            <td>Pajak (15%)</td>
            <td>Rp <?php echo $pajak; ?></td>
        </tr>
        <tr>
            <td>Biaya Layanan</td>
            <td>Rp <?php echo $biaya_layanan; ?></td>
        </tr>
        <tr>
            <td>Total Akhir</td>
            <td>Rp <?php echo $total_akhir; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $status; ?></td>
        </tr>
    </table>
</body>
</html>