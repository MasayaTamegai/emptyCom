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
	
	<form action="" method="post">
		<div>
			<label for="cat_title"> Add a Category </label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<input type="submit" value="SUBMIT">
		</div>
	</form>
</body>
</html>