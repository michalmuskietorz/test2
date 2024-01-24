<?php
//Only display games if a platform has been selected e.g. viewgames.php?platformId=1

if (isset($_GET['platformId']))  {

	$pdo = new PDO('mysql:dbname=csy2028;host=mysql', 'student', 'student');

	$platformStmt = $pdo->prepare('SELECT * FROM platform WHERE id = :id');
	$gamesStmt = $pdo->prepare('SELECT * FROM game WHERE platformId = :id');

	$values = [
		'id' => $_GET['platformId']
	];

	$platformStmt->execute($values);
	$gamesStmt->execute($values);


	$platform = $platformStmt->fetch();

	echo '<h1>' . $platform['name'] . ' game</h1>';

	echo '<ul>';
	foreach ($gamesStmt as $game) {
		echo '<li><a href="editgame.php?id=' . $game['id'] . '">' . $game['name'] . '</a></li>';
	}
	echo '</ul>';
}
?>
