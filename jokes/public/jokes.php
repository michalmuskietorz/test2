<?php


	$pdo = new PDO('mysql:host=mysql;dbname=ijdb;charset=utf8', 'student', 'student');

require  '../templates/jokes.html.php';
require  '../templates/layout.html.php';