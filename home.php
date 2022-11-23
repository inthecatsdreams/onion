<?php

include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my onion website</title>
</head>
<body>
    <div class="nav">
    <a href="/onion/upload.php"> browse pictures (<?php echo count(list_files("uploaded_files")) . " files uploaded so far"; ?>)</a>

    </div>
</body>
</html>