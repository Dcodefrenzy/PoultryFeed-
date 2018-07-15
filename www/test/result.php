<?php 
	include "db.php";
	include "functions.php";








$row = selectALL($conn);

extract($row);

$A = [$first, $fvalue, $fgroup];
$B = [$second, $svalue, $sgroup];
$C = [$third, $tvalue, $tgroup];
$D = [$B, $C];
$count = count($D);

if($count = 2){
	extract($A);
	extract($D);
	$S = 50/100*$tvalue;
	$T = 50/100*$svalue;
	$result = $T + $S;
	
	if ($result > 8) {
	$S = 60/100*$tvalue;
	$T = 40/100*$svalue;
	$result = $T + $S;
	
	if ($result > 8) {
	$S = 70/100*$tvalue;
	$T = 30/100*$svalue;
	$result = $T + $S;

	if ($result > 8) {
	$S = 80/100*$tvalue;
	$T = 20/100*$svalue;
	$result = 7.98;
	

	if ($result > 8) {
	$S = 90/100*$tvalue;
	$T = 10/100*$svalue;
	$result = $T + $S;
	
			}
		}
	 }
  }



}else{

}
/*echo $fvalue;
echo $result;*/

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

  $ct = 80/100*$E;
  $mt = 20/100*$E;
  echo $ct;
  echo '<br/>';
  echo $mt;


 ?>