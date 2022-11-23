<?php

include_once 'header.php';
if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $uploadFileDir = './uploaded_files/';
    $newFileName = md5($fileName) . "." . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;

    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $message = '<p>File has been successfully uploaded.<br></p>';
    } else {
        $message = "<p class='error'>There was some error moving the file to the upload directory.</p><br>";
    }
    echo $message;
}
?>
<html>

<body>
    <div class="page-wrapper">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" />
        <input type="submit" />
    </form>
    <table>
        <tr>
            <th>File name</th>
            <th>Size</th>
            <th>Path</th>
        </tr>



        <?php


        if (list_files("./uploaded_files") !== "0") {
            $files_arr = list_files("./uploaded_files");
            for ($i = 0; $i < count($files_arr); $i++) {
                echo "<tr>";

                echo "<td>" . end(explode("/", $files_arr[$i])) . "</td>";
                echo "<td>" . filesize($files_arr[$i]) . " bytes </td>";
                echo "<td> <a href='$files_arr[$i]'>$files_arr[$i] </a> </td>";
            }
        }
        else{
            echo "<p class='error'>No files have been uploaded yet.</p>";
        }
        ?>
        </tr>
    </table>
    </div>
    
</body>

</html>