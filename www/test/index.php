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
		if (empty($_POST['second_ing'])) {
			$error['second_ing'] = "Please select an ingredent";
		}
		if (empty($_POST['second'])) {
			$error['second'] = "Please inpute a value in kg";
		}
		if (empty($_POST['third_ing'])) {
			$error['third_ing'] = "Please select an ingredent";
		}
		if (empty($_POST['third'])) {
			$error['third'] = "Please inpute a value in kg";
		}
		if (empty($_POST['total'])) {
			$error['total'] = "Please inpute a the total requirement";
		}
		if(empty($error)){
			$clean = array_map('trim', $_POST);
			/*insertIntoCaculations($conn, $clean);*/
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
		<?php $display = displayErrors($error, 'first_ing');  echo $display; ?>
		<select onchange="getSub(this.value)"  name="first_ing">
			<?php selectIngredent($conn); ?>
		</select>
			<?php $display = displayErrors($error, 'first'); echo $display; ?>
			<input type="number" name="first" placeholder="kg">
			
		<br/>
		<?php $display = displayErrors($error, 'second_ing'); echo $display; ?>
		<select onchange="getSub(this.value)"  name="second_ing">
			<?php selectIngredent($conn); ?>
		</select>
		<?php $display = displayErrors($error, 'second'); echo $display; ?>
		<input type="number" name="second" placeholder="kg">

		<br/>
		<?php $display = displayErrors($error, 'third_ing'); echo $display;  ?>
		<select onchange="getSub(this.value)"  name="third_ing">
			<?php selectIngredent($conn); ?>
		</select>
		<?php $display = displayErrors($error, 'third'); echo $display; ?>
		<input type="number" name="third" placeholder="kg">
		
		<br/>
		<?php $display = displayErrors($error, 'total'); echo $display; ?>
		<p>Number To be measured <input type="number" name="total" placeholder="Item to be measured"></p>
		<input type="submit" name="submit">

	</form>

</body>

<script type="text/javascript">
	function getSub(id){

  var url = 'ajax.php';
  var method = 'POST';
  var params = 'ingredent=' + id;
 /* console.log(params);*/
  subAjax(url, method, params);
}

function subAjax(url, method, params){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4){
      var res = xhr.responseText;
      console.log(res);
      document.getElementById('sub').innerHTML = res ;
    }
  }
  xhr.open(method, url, true);
  xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  xhr.send(params);
}
</script>
</html>