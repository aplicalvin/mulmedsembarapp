<?php
// Define the title for this view
$title = "Jadwal Multimedia ";

// Start capturing the content
ob_start();
?>

<div class="container my-4">
    <h2>📅 Jadwal</h2>
    <p>This is the content of the home page.</p>

    <!-- JADWAL -->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hari/Tanggal</th>
                    <th scope="col">Nama Ibadah</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Slider</th>
                    <th scope="col">Soundman</th>
                    <th scope="col">Live Streaming</th>
                    <th scope="col">Camera</th>
                    <th scope="col">_</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Minggu, 23 Februari 2025</td>
                    <td>Minggu Pagi</td>
                    <td>09.00</td>
                    <td>Johnson Sitorus</td>
                    <td>Mido Gultom</td>
                    <td>Reyna Sigalingging</td>
                    <td>Manuella Sirait</td>
                    <td><a href="/detail/20250223001">detail</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Minggu, 23 Februari 2025</td>
                    <td>Minggu Sore</td>
                    <td>17.00</td>
                    <td>Nathan Sitorus</td>
                    <td>Theo Tobing</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="/detail/20250223001">detail</a></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="">Rabu, 26 Februari 2025</td>
                    <td>Partangiangan Perdana</td>
                    <td>19.00</td>
                    <td>Calvin Simbolon</td>
                    <td>Lukas Simatupang</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="/detail/20250223001">detail</a></td>

                </tr>
            </tbody>
        </table>
    </div>
    <!-- JADWAL -->
</div>

<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?>
