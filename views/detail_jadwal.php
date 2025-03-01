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
            <h5 class="fs-5 text-black-50 fw-normal">Minggu, 23 Februari 2025</h5>
        </div>
        <div class="row align-content-center text-center">
            <div class="border rounded-3 bg-primary text-white align-content-center" style="width: 60px; height: 60px;">
                <i class="bi bi-printer-fill  fs-2"></i>
            </div>
        </div>
    </div>
    <hr>
    <!-- TITLE AND JUDUL end -->

    <?php include('./components/detail_worship/informasi_umum.php'); ?>
    
    <?php include('./components/detail_worship/tata_ibadah.php'); ?>
    
</div>

<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?>
