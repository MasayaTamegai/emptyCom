<?php include "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="stylesheet" href="css/main.css">

	<title>Add a Post</title>
</head>
<body>

	<!-- Nav Bar -->
	<?php include "includes/navbar.php" ?>

	<h1>Add a Post</h1>

	<form action="" method="post">
		<div>
			<label for="title">Title</label>
			<input type="text" name="title" value="">
		</div>
		<div>
			<label for="contents">Contents</label>
			<textarea name="contents" cols="50" rows="15"></textarea>
		</div>
		<div>
			<label for="category">Category</label>
			<select name="category" id="">
				
			</select>
		</div>
		<div>
			<input type="submit" value="Add Post"> 
		</div>
	</form>
</body>
</html>