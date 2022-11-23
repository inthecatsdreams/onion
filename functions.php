<?php
function set_title($base_uri){
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
            default:
            $title = "unknown";
            break;
    }
    return $title;
}

function upload_file(){
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if (isset($_POST['submit'])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                return true;
              }
        }
        else {
            return false;
        }
    }
}