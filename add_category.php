<?php 

if (isset($_POST['name'])) {
	$name = trim($_POST['name']);

	if (empty($name)) {
		$error = 'You forgot the category name, DUMBASS.';
	} else if (strlen($name) > 24) {
		$error = 'Your shit is too long.';
	}

	if ( ! isset($error)) {
		add_category($name);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Add a Category</title>
</head>
<body>
	<h1>Add a Category</h1>
	<?php 
	if (isset($error)) {
		echo "<p> {$error} </p>\n";
	}
	?>
	<form action="" method="post">
		<div>
			<label for="name"> Name </label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<input type="submit" value="Add Category">
		</div>
	</form>
</body>
</html>