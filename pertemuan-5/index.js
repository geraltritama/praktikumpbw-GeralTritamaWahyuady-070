function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nama = document.getElementById("nama").value;
    let nilai = parseInt(document.getElementById("nilai").value);

    let huruf = "";
    if (nilai >= 85 && nilai <= 100) {
        huruf = "A";
    } else if (nilai >= 75 && nilai < 85) {
        huruf = "B";
    } else if (nilai >= 65 && nilai < 75) {
        huruf = "C";
    } else if (nilai >= 55 && nilai < 65) {
        huruf = "D";
    } else if (nilai >= 0 && nilai < 55) {
        huruf = "E";
    } else {
        huruf = "Nilai tidak valid!";
    }

    document.getElementById("hasil").innerHTML =
        "NIM: " + nim + "<br>" +
        "Nama: " + nama + "<br>" +
        "Nilai: " + nilai + "<br>" +
        "Huruf Mutu: " + huruf;
}