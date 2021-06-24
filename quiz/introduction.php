<?php
    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/src/php');
    // Page includes
    include 'auth.php';
    include 'quizData.php';
    // start session and initialize achieved number of points
    session_start();

    // Get quiz data
    $quizData = quizData();

    $pageData = $quizData['introduction'];

    // Initialize achieved number of points
    $_SESSION['achievedPoints'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../build/css/style.css">
</head>
<body>
    <div class="fucking-pos">
        <div class="caption">
            <span class="border-report">
            <?php
                echo '<a href="/index.php">' . $pageData['title'] . '</a>'; 
            ?></span>
            <form action="<?php echo $pageData['nextAction']; ?>" method="post">
                <input class="input1" type="hidden" name="questionID" 
                       value="<?php echo $pageData['questionID']; ?>">
                <input class="input1" type="submit" value="START">
            </form>
        </div>
        </div>
</body>
</html>