<?php 

//Create A Table and use this values for third ingredent compilation.
$row =  ['first'=>'locust beans', 'fvalue'=>6.3, 'fgroup'=>2, 'second'=>'maize starch', 'svalue'=>30, 'sgroup'=>1, 'third'=>'cocoyam', 'tvalue'=>14.7, 'tgroup'=>2 ];

extract($row);

//Since its a three ingredent formular regroup the fetch values into three variables $A, $B, $C
$A = [$first, $fvalue, $fgroup];
$B = [$second, $svalue, $sgroup];
$C = [$third, $tvalue, $tgroup];

	//extract each of the variables.
	extract($A);
	extract($B);
	extract($C);
	//If the group of the second ingredent and the third ingredent  is equals to 2(2 stands for Energy) or if both are equals to 1(1 stands for protain) entered by the user then parform another if statement.
if($sgroup == 2 && $tgroup == 2 || $sgroup ==1 && $tgroup ==1 ){
	//If the second value is greater than third value this means the third value will always be caculated first when multiplying with the proportion.
	if ($svalue > $tvalue) {
		$value1 = $tvalue;
		$value2 = $svalue;
	}else{
		$value1 = $svalue;
		$value2 = $tvalue;
	}
	//here we did the caculation of 5:5 and all other caculations.
	$S = 50/100*$value1;
	$T = 50/100*$value2;
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

  		$ct = 50/100*$E;
  		$mt = 50/100*$E;
	//if the proportion of 5:5 is greater than 8 then move to the next proportion.
	if ($result > 8) {
	$S = 60/100*$value1;
	$T = 40/100*$value2;
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

  		$ct = 60/100*$E;
  		$mt = 40/100*$E;
	//if the proportion of 6:4 is greater than 8 then move to the next proportion.
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
  		//if the proportion of 7:3 is greater than 8 then move to the next proportion.
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

	
  		//if the proportion of 9:1 is greater than 8 then move to the next proportion.
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
  		//if the proportion of 9:1 is greater than 8 then redirect and ask the user to input another value.
  		if ($result > 8) {
	 	echo "Whops";
	 	header("Location:function.php");
		 }
	
			}
		}
	 }
  
}

	//elseif group 1 and group 2 is eequal to 2 or equal to 1 that means the first user input and the second one belong to the same group.
}elseif ($fgroup == 2 && $sgroup == 2 || $fgroup ==1 && $sgroup==1) {
	//similar comment with the above but the diffrece is this is centered on fisrt group and third.
	if ($fvalue > $svalue) {
		$value1 = $svalue;
		$value2 = $fvalue;
	}else{
		$value1 = $fvalue;
		$value2 = $svalue;
	}
	$S = 50/100*$value1;
	$T = 50/100*$value2;
	$result = $T + $S;
		$group1 =  $tvalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  	

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
		$group1 =  $tvalue - 8;
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
		$group1 =  $tvalue - 8;
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
		$group1 =  $tvalue - 8;
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
		$group1 =  $tvalue - 8;
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
}elseif ($fgroup==2 && $tgroup==2 || $fgroup==1 && $tgroup==1) {
		if ($fvalue > $tvalue) {
		$value1 = $tvalue;
		$value2 = $fvalue;
	}else{
		$value1 = $fvalue;
		$value2 = $tvalue;
	}
	$S = 50/100*$value1;
	$T = 50/100*$value2;
	$result = $T + $S;
		$group1 =  $svalue - 8;
   		$g1 = abs($group1);

  		$group2 =  $result - 8;
  		$g2 = abs($group2);
   

  		$tgroup = $g1 + $g2;
  	

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
		$group1 =  $tvalue - 8;
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
		$group1 =  $svalue - 8;
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
		$group1 =  $svalue - 8;
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
		$group1 =  $svalue - 8;
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



   echo round($p, 2);
   echo "<br/>";
   echo round($ct, 2);
  echo '<br/>';
  echo round($mt, 2);


 ?>