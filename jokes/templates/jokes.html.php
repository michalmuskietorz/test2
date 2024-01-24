<?php
        $pdo = new PDO('mysql:host=mysql;dbname=ijdb;charset=utf8', 'student', 'student');

$sql = 'SELECT * FROM `joke`';
$jokes = $pdo->query($sql);

$title = 'Joke list';

$output = '';
foreach($jokes as $joke) {
	$output = $output . '<blockquote>';
	$output = $output . '<p>' . $joke['joketext'] . '</p>';
	$output = $output . '</blockquote>';
}