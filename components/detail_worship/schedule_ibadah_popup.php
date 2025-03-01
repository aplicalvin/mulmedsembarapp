<?php
// Mengambil parameter 'id' dari URL query
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Menampilkan konten sesuai dengan id yang diterima
if ($id == 1) {
    echo "<h3>Acara: Bernyanyi</h3>";
    echo "<p><strong>Keterangan:</strong> BN No. 9 : 1 – (2)</p>";
    echo "<p><strong>Detail:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
} elseif ($id == 2) {
    echo "<h3>Acara: Votum - Introitus - Doa</h3>";
    echo "<p><strong>Keterangan:</strong> A.V/A.2 – D. V/16</p>";
    echo "<p><strong>Detail:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
} elseif ($id == 3) {
    echo "<h3>Acara: Bernyanyi</h3>";
    echo "<p><strong>Keterangan:</strong> BN No. 581 : 1 - 2</p>";
    echo "<p><strong>Detail:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
} else {
    echo "<p>Detail tidak ditemukan.</p>";
}
?>
