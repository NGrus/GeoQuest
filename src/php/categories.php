<?php
    // Preset path to include folder 
    echo $_SERVER['DOCUMENT_ROOT'];
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/php');
    // Page includes
    include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>
<div class="player-tag">
    <div id="home" class="">
         <h1 class="player-name">Welcome <?php echo $_POST["username"]; ?></h1>
     </div>
     </div>
</body>
</html>
