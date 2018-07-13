<?php 
	include "db.php";
	include "functions.php";
	
	$error = [];

	if (array_key_exists('submit', $_POST)) {
		if (empty($_POST['first_ing'])) {
			$error['first_ing'] = "Please Select an ingredent";
		}
		if (empty($_POST['first'])) {
			$error['first'] = "Please inpute a value in kg";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h2>Feeds Caculation For Poutry</h2>

	<form method="Post">
		<select name="first_ing">
			<?php selectIngredent($conn); ?>
		</select>
			<input type="number" name="first" placeholder="kg">
		
		<br/>
		<select name="second_ing">
			<?php selectIngredent($conn); ?>
		</select>
			<input type="number" name="second" placeholder="kg">
		
		<br/>
		<select name="third_ing">
			<?php selectIngredent($conn); ?>
		</select>
		<input type="number" name="third" placeholder="kg">
		
		<br/>
		<p>Number To be measured <input type="number" name="total measurement" placeholder="Item to be measured"></p>
		<input type="submit" name="submit">

	</form>

</body>
</html>