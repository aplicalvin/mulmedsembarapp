<?php
// Define the title for this view
$title = "Home Page";

// Start capturing the content
ob_start();
?>

<div class="container my-4 d-flex flex-column gap-3">
    <!-- TITLE AND JUDUL -->
     <div class="d-flex flex-row justify-content-between">
         <div class="">
             <p class="text-primary mb-0 fs-5">Detail Informasi Ibadah</p>
             <h2>Ibadah Minggu Pagi</h2>
             <h5 class="fs-5 text-black-50 fw-normal">Minggu, 23 Februari 2025</h2>
        </div>
        <div class="row align-content-center text-center">
            <div class="border rounded-3 bg-primary text-white align-content-center" style="width: 60px; height: 60px;">
                <i class="bi bi-printer-fill  fs-2"></i>
            </div>
        </div>
    </div>
    <hr>
    <!-- TITLE AND JUDUL end -->

    <!-- DETAIL  -->
    <div class="row" >
        <div class="col-lg-8">
            <h1 class="fs-3">Detail Umum</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Topik (Batak)</th>
                            <td class="text-black fw-light">"Mengasihi Musuh"</td>
                        </tr>
                        <tr>
                            <th scope="row">Topik (Indo)</th>
                            <td class="text-black fw-light">Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Jam Masuk</th>
                            <td class="text-black fw-light">09.00</td>
                        </tr>
                        <tr>
                            <th scope="row">Epistel</th>
                            <td class="text-black fw-light">Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Nats / Evangelis</th>
                            <td class="text-black fw-light">Jacob</td>
                        </tr>
                    </tbody>
                </table>   
            </div>
        </div> 
        <!-- DETAIL  -->
    
        <!-- Petugas -->
         <div class="col-lg-4">
            <h1 class="fs-3">Petugas Multimedia</h1>
            <div>
            <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Slider</th>
                            <td class="text-black fw-light">Johnson Sitorus</td>
                        </tr>
                        <tr>
                            <th scope="row">Soundman</th>
                            <td class="text-black fw-light">Mido Gultom</td>
                        </tr>
                        <tr>
                            <th scope="row">Live Streaming</th>
                            <td class="text-black fw-light">Reyna Sigalingging</td>
                        </tr>
                        <tr>
                            <th scope="row">Cameraman</th>
                            <td class="text-black fw-light">Manuella Sirait</td>
                        </tr>
                        <tr>
                            <th scope="row">Tambahan</th>
                            <td class="text-black fw-light">-</td>
                        </tr>
                    </tbody>
                </table>   
            </div>
         </div>
        <!-- Petugas -->
    </div>
    <!-- Daftar KOOR -->
    <div>
        <h1 class="fs-3">Daftar Koor</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered rounded-2">
                <thead >
                    <tr>
                        <th>No</th>
                        <th>Nama Kategorial</th>
                        <th>Keterangan</th>
                        <th>Link Assets</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-black fw-light">1</td>
                        <td class="text-black fw-light">Koor Sie Parompuan</td>
                        <td class="text-black fw-light">Urutan pertama</td>
                        <td class="text-black fw-light">-</td>
                    </tr>
                    <tr>
                        <td class="text-black fw-light">2</td>
                        <td class="text-black fw-light">Anak Sekolah Minggu</td>
                        <td class="text-black fw-light">Perlu kondensor 2</td>
                        <td class="text-black fw-light"><a href="https://www.youtube.com/@hkbpsembar">assets</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- DETAIL TAMBAHAN -->
    <div class="border py-2 px-3 rounded-2 border-dark-subtle">
        <h1 class="fs-5">Catatan</h1>
        <p class="text-black-50 fw-light">Ada persembahan ketiga untuk mendukung dana ressort. <br> koor SKM membutuhkan MP3</p>

    </div>
    
    <!-- DETAIL END -->

    <div>
        <h1 class="fs-3">Detail untuk Petugas</h1>
        <div>
            tata ibadah 
            <br>
            Link Warta
            <br>
            Link Live Streaming
            <br>
            Link Thumbnail
            <br>
            
        </div>
    </div>
</div>

<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?> 
