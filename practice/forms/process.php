<?php
// $answer = $_POST['answer'];

// $correct = $answer == 'pumpkin';
 
// require 'process-view.php';
$answer = $_GET['answer'];

var_dump($answer);

$correct = $answer == 'pumpkin';

require 'process-view.php';