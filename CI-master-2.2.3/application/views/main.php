<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
</head>
<body>
	<h3>Random Word (attempt #<?= $counter ?> )</h3>
	<h1><?= $random ?></h1>
	<form action="/generators/create_word" method="post">
		<input type="submit" value="Generate">
	</form>
</body>
</html>