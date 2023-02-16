<?php

session_start();

$answer = $_GET['answer'];

var_dump($answer);

$correct = $answer == 'pumpkin';

$_SESSION['results'] = [
    'answer' => $answer,
    'correct' => $correct
];

// $_SESSION['answer'] = $answer;
// $_SESSION['correct'] = $correct;

#redirect
header('Location: done.php');