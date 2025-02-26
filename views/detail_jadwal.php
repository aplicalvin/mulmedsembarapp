<?php
// Define the title for this view
$title = "Home Page";

// Start capturing the content
ob_start();
?>

<div class="container my-4">
    <!-- TITLE AND JUDUL -->
    <div>
        <p class="text-primary mb-0 fs-5">Detail Informasi Ibadah</p>
        <h2>Ibadah Minggu Pagi</h2>
        <h5 class="fs-5 text-black-50 fw-normal">Minggu, 23 Februari 2025</h2>
    </div>
    <hr>
    <!-- TITLE AND JUDUL end -->

    <!-- DETAIL  -->
    <div class="row" >
        <div class="col-lg-8">
            <h1 class="fs-3">Detail Umum</h1>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Topik (Batak)</th>
                            <td>"Mengasihi Musuh"</td>
                        </tr>
                        <tr>
                            <th scope="row">Topik (Indo)</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Jam Masuk</th>
                            <td>09.00</td>
                        </tr>
                        <tr>
                            <th scope="row">Epistel</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Nats</th>
                            <td>Jacob</td>
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
            <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Slider</th>
                            <td>Johnson Sitorus</td>
                        </tr>
                        <tr>
                            <th scope="row">Soundman</th>
                            <td>Mido Gultom</td>
                        </tr>
                        <tr>
                            <th scope="row">Live Streaming</th>
                            <td>Reyna Sigalingging</td>
                        </tr>
                        <tr>
                            <th scope="row">Cameraman</th>
                            <td>Manuella Sirait</td>
                        </tr>
                        <tr>
                            <th scope="row">Tambahan</th>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>   
            </div>
         </div>
        <!-- Petugas -->
    </div>
    
    <!-- DETAIL END -->

    <div>
        <h1 class="fs-3">Petugas Multimedia</h1>
     
    </div>
</div>

<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?> 
