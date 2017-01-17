<?php include "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="stylesheet" href="css/main.css">

	<title>Add a Category</title>
</head>
<body>
	<!-- Nav Bar -->
	<?php include "includes/navbar.php" ?>
	
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