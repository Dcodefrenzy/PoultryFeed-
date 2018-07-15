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




	/*function insertIntoCaculations($dbconn, $input){
		$fvalue = 1;
		$svalue = 2;
		$tvalue = 2;
		$stmt= $dbconn->prepare("INSERT INTO caculation ('first, fvalue, fgroup, second, svalue, sgroup, third, tvalue, tgroup, total') VALUES(':fing, :first, :fg, :sing, :second, :sg, :ting, :third, :tg, :tot')");

		$data = [
				':fing' => $input['first_ing'],
				':first' => $input['first'],
				':fg'=>$fvalue,
				':sing' => $input['second_ing'],
				':second'=>$input['second'],
				':sg'=>$svalue,
				':ting'=> $input['third_ing'],
				':third'=>$input['third'],
				':tg'=>$tvalue,
				':tot'=>$input['total'],

		];
		$stmt->execute($data);
	}*/

function displayErrors($error, $field){
  $result= "";
  if (isset($error[$field])){
    $result = '<span class="err">'.$error[$field].'</span>';
  }
  return $result;
}

	function selectAll($dbconn){
		$stmt= $dbconn->prepare("SELECT * FROM caculation");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_BOTH);
		return $result;

	}
 function caculate($A, $B){
 	
 }


 ?>