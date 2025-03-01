<?php
    // Your Folder Route
    $project_location = '/';
    $me = $project_location;

    // GET THE URL PATH
    $request = $_SERVER['REQUEST_URI'];

    // Normalize the request path: remove trailing slash
    $request = rtrim($request, '/');

    switch($request) {
        case '/':
        case '':
            require 'views/home.php';
            break;
        case '/jadwal':
            require 'views/jadwal.php';
            break;
        case '/member':
            require 'views/member.php';
            break;
        case '/info':
            require 'views/informasi.php';
            break;
        case '/detail/20250223001':
            require 'views/detail_jadwal.php';
            break;
        case '/tataibadah':
            require 'components/detail_worship/tata_ibadah.php';
            break;

        // AUTH
        case '/login':
            require 'views/auth/login.php';
            break;

        // ADMIN PANEL
        case '/admin' :
            require 'views/admin/dashboard.php';
            break; 

        default:
            http_response_code(404);
            require 'views/error/404.php';
            break;
    }


?>