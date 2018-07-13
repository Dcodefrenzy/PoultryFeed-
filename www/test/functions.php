<?php 
	


	function selectIngredent($dbconn){
		$stmt = $dbconn->prepare("SELECT * FROM ingredent");
		$stmt->execute();
		echo  '<option value="">-Select Ingredent-</option>';
		while ($row=$stmt->fetch(PDO::FETCH_BOTH)) {
			extract($row);
				
		echo "<option value=".$ingredent.">".$ingredent."</option>";
		}
	}


 ?>