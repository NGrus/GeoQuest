<?php
    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/src/php');
    // Page includes
    include 'auth.php';
    include 'quizData.php';
    // Start the session and initialize the result array
    session_start();
    $_SESSION["quiz-ckue-results"] = array();
    // Get quiz data
    $quizData = quizData();
    echo $quizData;
    $pageData = $quizData['report'];
    // Session object: Update number of achieved points
    // var_dump($_POST);
    $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../build/css/style.css">
</head>
<body>
    <div class="bgimg-1">
        <div class="caption">
            <span class="border">
            <?php
                echo '<a class="feedback" href="/index.php">' . $pageData['title'] . '</a>';
                echo '<p class="feedback">' . $pageData['feedback_60'] . '</p>';
                echo '<p class="feedback2">You have answered ' . $_SESSION['achievedPoints'] . ' question(s) correctly.</p>';
            ?></span>
        </div>
    </div>
</body>
</html>
