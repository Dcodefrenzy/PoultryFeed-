<?php 

$row =  ['first'=>'locust beans', 'fvalue'=>30, 'fgroup'=>1, 'second'=>'maize starch', 'svalue'=>14.7, 'sgroup'=>2, 'third'=>'cocoyam', 'tvalue'=>6.3, 'tgroup'=>2 ];

extract($row);

$A = [$first, $fvalue, $fgroup];
$B = [$second, $svalue, $sgroup];
$C = [$third, $tvalue, $tgroup];
$D = [$B, $C];

	extract($A);
	extract($D);
if($sgroup && $tgroup= 2){
	if ($svalue > $tvalue) {
		$value1 = $tvalue;
		$value2 = $svalue;
	}else{
		$value1 = $svalue;
		$value2 = $tvalue;
	}
	$S = 50/100*$value1;
	$T = 50/100*$value2;
	$result = $T + $S;
		$group1 =  $fvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  		/*echo $tgroup;*/

  		$groupEnergy = $g1/$tgroup*100;
  		$groupProtain = $g2/$tgroup*100; 
 		 $p = $groupProtain/100*20;
 
 		 $E = $groupEnergy/100*20;

  		$ct = 50/100*$E;
  		$mt = 50/100*$E;
	
	if ($result > 8) {
	$S = 60/100*$value1;
	$T = 40/100*$value2;
	$result = $T + $S;
		$group1 =  $fvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  		/*echo $tgroup;*/

  		$groupEnergy = $g1/$tgroup*100;
  		$groupProtain = $g2/$tgroup*100; 
 		 $p = $groupProtain/100*20;
 
 		 $E = $groupEnergy/100*20;

  		$ct = 60/100*$E;
  		$mt = 40/100*$E;
	
	if ($result > 8) {
	$S = 70/100*$value1;
	$T = 30/100*$value2;
	$result = $T + $S;
		$group1 =  $fvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  		

  		$groupEnergy = $g1/$tgroup*100;
  		$groupProtain = $g2/$tgroup*100; 
 		 $p = $groupProtain/100*20;
 
 		 $E = $groupEnergy/100*20;

  		$ct = 70/100*$E;
  		$mt = 30/100*$E;

	if ($result > 8) {
		$S = 80/100*$value1;
		$T = 20/100*$value2;
		$result = $S + $T;
		$group1 =  $fvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  		

  		$groupEnergy = $g1/$tgroup*100;
  		$groupProtain = $g2/$tgroup*100; 
 		 $p = $groupProtain/100*20;
 
 		 $E = $groupEnergy/100*20;

  		$ct = 80/100*$E;
  		$mt = 20/100*$E;

	

	if ($result > 8) {
	$S = 90/100*$value1;
	$T = 10/100*$value2;
	$result = $T + $S;
		$group1 =  $fvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  	

  		$groupEnergy = $g1/$tgroup*100;
  		$groupProtain = $g2/$tgroup*100; 
 		 $p = $groupProtain/100*20;
 
 		 $E = $groupEnergy/100*20;

  		$ct = 90/100*$E;
  		$mt = 10/100*$E;

  		if ($result > 8) {
	 	echo "Whops";
	 	header("Location:function.php");
		 }
	
			}
		}
	 }
  
}


}
else{

}
/*echo $fvalue;
echo $result;*/

   echo round($p, 2);
   echo "<br/>";
   echo round($ct, 2);
  echo '<br/>';
  echo round($mt, 2);


 ?>