<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../build/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php
include 'header.php';
$score = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["A1"]) && ($_POST["A1"] == "1")){
            $score++;
            echo $score;
        }else{
            echo "Very Bad";
        }
    }
?>
<div class="main">
<div class="container1">
   <div id="nicoQuestions" class="">
        <h1>Famous rivers</h1>
        <form action="nicoQuiz.php"method="post">
        <div class="nicoQ" id="q1">
          <h2>Question One:<br><br></h2>
          <h2>In which country do the Rivers Tigris and Euphrates meet?</h2> 
          <button class="nicobtn" id="nicoA1" name="A1" type="button" value="0"onclick="nextq()">
            Turkey
          </button>
          <br>
          <button class="nicobtn" id="nicoA2" name="A1" type="button" value="0" onclick="nextq()">
            Iran
          </button>
          <br>
          <button class="nicobtn" id="nicoA3" name="A1" type="button" value="1"onclick="nextq()">
            Iraq
          </button>
          <br>
          <button class="nicobtn" id="nicoA4" name="A1" type="button" value="0" onclick="nextq()">
            Israel
          </button>
        </div>
        <div class="nicoQ" id="q2">
          <h2>how many countries does the Rhine river pass through?<br><br></h2>
          <h2>whatever1</h2>
          <button class="nicobtn" name="B1" id="nicoA1" type="button" value="0" onclick="nextq2()">
            4
          </button>
          <br>
          <button class="nicobtn" id="nicoA2" type="button" value="1"onclick="nextq2()">
            6
          </button>
          <br>
          <button class="nicobtn" id="nicoA3" type="button" value="0" onclick="nextq2()">
            8
          </button>
          <br>
          <button class="nicobtn" id="nicoA4" type="button" value="0" onclick="nextq2()">
            10
          </button>
        </div>
        <div class="nicoQ" id="q3">
          <h2>Question Two:<br><br></h2>
          <h2>whatever2</h2>
          <button class="nicobtn" id="nicoA1" type="button" onclick="nextq3()">
            one
          </button>
          <br>
          <button class="nicobtn" id="nicoA2" type="button" onclick="nextq3()">
            two
          </button>
          <br>
          <button class="nicobtn" id="nicoA3" type="button" onclick="nextq3()">
            three
          </button>
          <br>
          <button class="nicobtn" id="nicoA4" type="button" onclick="nextq3()">
            four
          </button>
        </div>
        <div class="nicoQ" id="q4">
          <h2>Question Two:<br><br></h2>
          <h2>whatever3</h2>
          <button class="nicobtn" id="nicoA1" type="button" onclick="nextq4()">
            one
          </button>
          <br>
          <button class="nicobtn" id="nicoA2" type="button" onclick="nextq4()">
            two
          </button>
          <br>
          <button class="nicobtn" id="nicoA3" type="button" onclick="nextq4()">
            three
          </button>
          <br>
          <button class="nicobtn" id="nicoA4" type="button" onclick="nextq4()">
            four
          </button>
        </div>
        </form>
    </div>
  </div>
</div>
<script src="../src/js/nicoQuiz.js"></script>
</body>
</html>