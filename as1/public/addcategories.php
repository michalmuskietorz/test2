<?php
require 'head.php';
?>
<main>
<?php
if (isset($_POST['submit'])) {
	$pdo = new PDO('mysql:dbname=edelectronics;host=mysql', 'student', 'student');


	$stmt = $pdo->prepare('INSERT INTO  categories (name) VALUES (:name)');

	$values = [
		'name' => $_POST['name']
	];

	$stmt->execute($values);
	echo 'categories ' . $_POST['name'] . ' added';
}
else {
?>
<form action="addcategories.php" method="POST">
	<label>Category name:</label>
	<input type="text" name="name" />
	<input type="submit" name="submit" value="Add" />
</form>
<?php
}
?>
	</main>
<?php
require 'foot.php';
?>