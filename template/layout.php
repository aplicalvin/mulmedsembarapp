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

        <!-- ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="/css/general.css" />
    </head>
    
        <!-- Navbar -->
        <?php include('components/navbar.php'); ?>
        <!-- Navbar -->
        
        <main style="min-height: 85vh";>
            <?php echo $content; ?> <!-- Placeholder for view content -->
        </main>

        <?php include('components/footer.php') ?>

        <!-- script -->

        <script>
        // Fungsi untuk menyalin teks ke clipboard
        // Fungsi untuk menyalin teks ke clipboard
        function copyToClipboard(button) {
            // Mendapatkan teks dari cell yang berisi tombol
            var text = button.closest('td').childNodes[0].nodeValue.trim();

            // Membuat elemen input sementara untuk menyalin ke clipboard
            var tempInput = document.createElement("input");
            document.body.appendChild(tempInput);
            tempInput.value = text;  // Set value input dengan teks yang akan disalin
            tempInput.select();
            document.execCommand("copy");  // Menyalin ke clipboard
            document.body.removeChild(tempInput);  // Menghapus elemen input setelah menyalin

            // Memberi tahu pengguna bahwa teks telah disalin
            alert("Teks telah disalin");
        }
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
