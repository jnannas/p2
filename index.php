<!DOCTYPE html>
<html>
<head>

		<title>John Nannas P2 - Password Generator </title>
		<meta charset="utf-8">

		<link rel='stylesheet' href='style.css'>

		<?php require 'logic.php'; ?>
</head>
<body>
		<h1>xkcd Password Generator</h1>

		<h2 class="password"> <?php echo $password ?> </h2>

		<form action='index.php' method='GET'>

			<label for='numberWords'>How many words</label>
			<input maxlength=1 type='text' name='numberWords' id='numberWords' value='<?php echo $numberHold ?>' >
			<br/>
			<input type='checkbox' name='includeNumber' id='includeNumber' <?php echo $numberBoxHold ?> >
			<label for='includeNumber'>Include a Number</label>
			<br/>
			<input type='checkbox' name='includeSymbol' id='includeSymbol' <?php echo $symbolBoxHold ?>>
			<label for='includeSymbol'>Include a Symbol</label>
			<br/>
			<input type='submit' value='Generate Again'>

		</form>
		<br/>
		<a href="http://xkcd.com/936/">xkcd password concept original</a>
		<br/>
		<br/>
		<img src="./xkcdPassword.png" alt="xkcd Password Comic">
		
</body>
</html>

