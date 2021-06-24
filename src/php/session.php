<?php
// Start the session.
session_start();
// Check the availability of quiz data.
if (!isset($_SESSION["quizDataInitialized"])) {
    include "php/quiz-chris.php";
    $_SESSION["qchris"] = quizData();
    $_SESSION["quizDataInitialized"] = true;
}








?>
