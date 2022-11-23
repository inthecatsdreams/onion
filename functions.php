<?php
function set_title($base_uri)
{
    $title = "";
    switch ($base_uri) {
        case '/onion/':
            $title = "home";
            break;
        case '/onion/index.php':
            $title = "home";
            break;
        case '/onion/gallery.php':
            $title = "gallery";
            break;
        case '/onion/upload.php':
            $title = "upload";
            break;

        default:
            $title = "unknown";
            break;
    }
    return $title;
}


function list_files($dir)
{
    $files = glob($dir . "/*.*");
    if (!$files) {
        return "0";
    }
    return $files;
}
