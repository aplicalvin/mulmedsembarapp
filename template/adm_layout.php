<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            <?php echo $title ?? 'Mulmed Sembar Apps - Schedule, Information, and Worship Time'; ?>
        </title>
        <link
            rel="shortcut icon"
            href="assets/logoSemBar.png"
            type="image/x-icon"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="/css/general.css" />
    </head>
    
        <!-- Navbar -->
        <?php include('components/adm_navbar.php'); ?>
        <!-- Navbar -->
        
        <main style="min-height: 85vh";>
            <?php echo $content; ?> <!-- Placeholder for view content -->
        </main>

        <?php include('components/footer.php') ?>

        <!-- script -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
