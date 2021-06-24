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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <?php
  include 'header.php'
  ?>
  <div class="main">
    <div class="container1">
      <div id="home" class="">
        <h1> Lets play Geo Quest!</h1>
        <a href="/src/php/user.php" class="play-btn">Play Geo Quest!</a>
        <a href="#" class="highscore-btn">High Scores</a>
      </div>
    </div>
    <div class="caption">
      <span class="border">
        <?php
        echo '<a href="/">INTRODUCTION</a>';
        ?>
      </span>
    </div>
  </div>
</body>
</html>