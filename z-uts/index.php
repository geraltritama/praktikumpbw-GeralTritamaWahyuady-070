<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses.php" method="post">
        <div>
            <h2>Form Pemesanan</h2>
        </div>
        
        <label for="">Nama:</label>
        <input type="text" name="nama" required maxlength="30" placeholder="masukan nama"> <br><br>

        <label for="">NPM:</label>
        <input type="number" name="npm" required maxlength="30" placeholder="masukan NPM"> <br><br>

        <label for="">Email:</label>
        <input type="email" name="email" required maxlength="50" placeholder="masukan email"> <br><br>

        <label for="">Jenis Layanan:</label>
        <select name="jenis_layanan" required >
            <option value="reguler">Reguler</option>
            <option value="prioritas">Prioritas</option>
        </select> <br><br>

        <label for="">Pilih barang:</label><br>
        <input type="checkbox" name="barang[]" value="Buku"> Buku <br>
        <input type="checkbox" name="barang[]" value="Alat Tulis"> Alat Tulis <br>
        <input type="checkbox" name="barang[]" value="Seragam"> Seragam <br>
        <input type="checkbox" name="barang[]" value="Perlengkapan Olahraga"> Perlengkapan Olahraga <br><br>

        <label for="">Jumlah Barang:</label>
        <input type="number" name="jumlah_barang" required min="1" placeholder="masukan jumlah barang"> <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>