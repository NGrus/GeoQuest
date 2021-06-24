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
        <div class="report-container">
            <span class="border-report">
            <?php
                echo '<p class="feedback" href="/index.php">' . $pageData['title'] . '</p>';
                ?> <br>
                <?php
                echo '<p class="feedback2">You have answered ' . $_SESSION['achievedPoints'] . ' question(s) correctly.</p>';
            ?></span>
        </div>
</body>
</html>
