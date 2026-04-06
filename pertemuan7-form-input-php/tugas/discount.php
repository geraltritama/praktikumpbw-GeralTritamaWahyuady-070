    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Menu Diskon Pembayaran Mahasiswa</title>
</head>
<body>
    <form action="discount_hasil.php" method="post">
    <h2><b>KETERANGAN:</b></h2>
    <p>Jika mahasiswa bayar ukt >= Rp 5.000.000,- maka diskon 10%</p>
    <p>Jika mahasiswa bayar ukt >= Rp 5.000.000,- dan > 8 semester maka diskonnya ditambah 5% menjadi 15%</p> 
    <h2><b>Fitur Menu Diskon Pembayaran Mahasiswa</b></h2>
    <hr><br>
        <div class="form-group">
            <label>NPM</label>
            <input type="number" name="NPM" required>

            <label>NAMA</label>
            <input type="text" name="nama" required>

            <label>PRODI</label>
            <input type="text" name="prodi" required>

            <label>SEMESTER</label>
            <input type="number" name="semester" required>

            <label>BIAYA UKT</label>
            <input type="number" name="biaya_ukt" required>

            <br>
            <button type="submit"><b>SUBMIT</b></button>
        </div>
    </form>
</body>
</html>