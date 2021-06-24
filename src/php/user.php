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
    <link rel="stylesheet" href="../../build/css/style.css">
</head>
<body>
<?php echo $_POST["username"]; ?>
<div class="container">
    <div id="home" class="">
         <h1>Enter your name</h1>
        <div class="user-container">
        <form action="../../quiz/introduction.php" method="post">
         <input type="text" name="username" class="user-name">
         <input type="submit" class="sumbit-btn" href="../../quiz/introduction.php">
         </form>
         </div>
     </div>
     </div>
</body>
</html>
