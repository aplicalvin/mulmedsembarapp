<?php
// Define the title for this view
$title = "Tim Kami";

// Start capturing the content
ob_start();
?>

    <div class="container my-4">
        <h2>Tim Kami</h2>
        <p>This is the content of the home page.</p>
        <div class="row">
        <?php
            
            for ($i = 0; $i < 10; $i++) {
                include('components/member_card.php'); 
            }
            
            ?>
        </div>
    </div>


<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?>

