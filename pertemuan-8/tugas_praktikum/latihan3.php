<h2>Soal 3: Daftar Nama Hewan (Foreach)</h2>
<p>Program ini pembuatan Array dan melakukan iterasi menggunakan perulangan <code>foreach</code>.</p>
<hr>

<h3>Daftar Hewan (Array):</h3>
<div class="hasil-box">
    <ol>
    <?php
    // Membuat array berisikan daftar hewan 
    $daftar_hewan = [
        "Kucing Domestik", 
        "Anjing Golden Retriever", 
        "Harimau Sumatera", 
        "Gajah Afrika", 
        "Jerapah", 
        "Singa Putih", 
        "Burung Beo",
        "Kuda Nil",
        "Panda Merah"
    ];

    // Menampilkan array menggunakan foreach 
    foreach ($daftar_hewan as $hewan) {
        echo "<li><strong>$hewan</strong></li>";
    }
    ?>
    </ol>
</div>
