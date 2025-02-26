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
    <div>
        <h1 class="fs-3">Detail Umum</h1>
    </div> 
    <!-- DETAIL  -->

</div>

<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?>
