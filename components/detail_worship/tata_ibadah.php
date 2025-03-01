<div>
    <h1 class="fs-3">Detail untuk Petugas</h1>

    <div class="row">
        <table class="table table-striped table-hover border-secondary table-bordered">
            <thead>
                <tr>
                    <th>Acara Minggu</th>
                    <th>23 Februari 2025 <br> (Bahasa Indonesia) </th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris-baris dengan link "Detail" -->
                <tr>
                    <td>Bernyanyi</td>
                    <td>BN No. 9 : 1 – (2)</td>
                    <td><a href="#" class="detail-link" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="1">detail</a></td>
                </tr>
                <tr>
                    <td>Votum - Introitus - Doa</td>
                    <td>A.V/A.2 – D. V/16</td>
                    <td><a href="#" class="detail-link" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="2">detail</a></td>
                </tr>
                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for details -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Acara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Konten detail akan dimuat di sini -->
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script>
// Event listener untuk menangani klik link "detail"
document.querySelectorAll('.detail-link').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        
        // Ambil data-id yang ada di atribut link
        const itemId = this.getAttribute('data-id');
        
        // Menggunakan Fetch untuk mengambil konten dari file schedule_ibadah_popup.php
        fetch('/tataibadah?id=' + itemId)
            .then(response => response.text())  // Ambil respon sebagai teks
            .then(data => {
                // Masukkan konten ke dalam elemen modalContent
                document.getElementById('modalContent').innerHTML = data;
            })
            .catch(error => {
                console.error('Error loading the popup content:', error);
            });
    });
});
</script>
