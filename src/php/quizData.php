<?php

function quizData() {
    return array(
        'introduction' => quizIntroData(),
        'questions' => quizquestionData(),
        'report' => reportData()
    );
}

function quizIntroData() {
    return array(
        'title' => "Start your Game!",
        'description' => "You'll do fine",
        'imageURL' => "/images/bild.jpg",
        'nextAction' => 'question.php',
        'questionID' => 'q0'
    );
    //franco array
    return array(
      'title2' => 'Capital Cities',
      'description' => 'You can do it!',
      'imageURL' => '#',
      'nextAction' => 'franco0'
    );
    

}

function quizQuestionData() {
    return array(
        'q0' => nicoQ0(),
        'q1' => nicoQ1(),
        'q2' => nicoQ2(),
        'franco0' => francoq0(),
        'franco1' => francoq1(),
        'franco2' => francoq2(),
        'gonzalo1' => gonzaloq1(),
        'gonzalo2' => gonzaloq2(),
        'gonzalo3' => gonzaloq3()
      );
}

function francoq0(){
  return array(
    'text' => "What is the name of the capital of Iceland?",
    'answers' => array(
        array("Reykjavik", 1),
        array("Amsterdam", 0),
        array("Minsk", 0)
    ),
    'nextAction' => 'question.php',
    'questionID' => 'franco1'
);
}
function francoq1(){
  return array(
    'text' => "What is the name of the capital of Liechtenstein?",
    'answers' => array(
        array("Chur", 0),
        array("Vaduz", 1),
        array("Cham", 0)
    ),
    'nextAction' => 'question.php',
    'questionID' => 'franco2'
);
}
function francoq2(){
  return array(
    'text' => "What is the name of the capital of Italy?",
    'answers' => array(
        array("Milan", 0),
        array("Turin", 0),
        array("Rome", 1)
    ),
    'nextAction' => 'question.php',
    'questionID' => 'gonzalo1'
);
}

function nicoQ0() {
    return array(
        'text' => "In which country do the Tigris and Euphrates rivers meet?",
        'answers' => array(
            array("Turkey", 0),
            array("Israel", 0),
            array("Iraq", 1)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q1'
    );
}

function nicoQ1() {
    return array(
        'text' => "How many countries does the Rhine river pass through?",
        'answers' => array(
            array(4, 0),
            array(6, 1),
            array(8, 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q2'
    );
}

function nicoQ2(){
  return array(
    'text' => 'Which is the largest river that passes through China?',
    'answers' => array(
      array('The Mekong River', 0),
      array('The Yangtze River', 1),
      array('The Yellow River', 0)
    ),
    'nextAction' => 'question.php',
    'questionID' => 'franco0'
  );
}

function gonzaloQ1() {
    return array(
        'text' => "What is the most famous Mountain in Japan?",
        'answers' => array(
            array("Kitadake", 0),
            array("Fuji", 1),
            array("Ontake", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'gonzalo2'
    );
}

function gonzaloQ2(){
  return array(
    'text' => 'What is the tallest mountain in the world?',
    'answers' => array(
      array('Huascaran', 0),
      array('Everest', 1),
      array('Matterhorn', 0)
    ),
    'nextAction' => 'question.php',
    'questionID' => 'gonzalo3'
  );
}

function gonzaloQ3(){
    return array(
      'text' => 'Where is the mountain K2 located?',
      'answers' => array(
        array('Philipines', 0),
        array('China', 1),
        array('Argentina', 0)
      ),
      'nextAction' => 'report.php',
    );
  }

function reportData() {
    return array(
        'title' => "Congratulations",
        'text' => "That was a {$feedback} performance!",
        'feedback_40' => "lousy",
        'feedback_60' => "mediocre",
        'feedback_60' => "super!!!",
        'imageURL' => "/src/images/bild.jpg"
    );
}
?>
