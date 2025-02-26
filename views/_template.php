<?php
// Define the title for this view
$title = "Home Page";

// Start capturing the content
ob_start();
?>

    <div class="container my-4">
        <h2>Welcome to the Home Page</h2>
        <p>This is the content of the home page.</p>
    </div>


<?php
// Store the captured content in a variable
$content = ob_get_clean();

// Include the master layout
include './template/layout.php';
?>

