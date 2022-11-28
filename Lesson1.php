<?php 
// $age=array("Eli"=>"34","Veli"=>"23", "Gul" => "24");
// asort($age);
// foreach ($age as $i => $i_value){
// 	echo "Key= ".$i.", Value= ".$i_value;
// 	echo "<br>";
// }



?>

// METOD BY FOR
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<pre>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
  	//print_r($col);
  	echo "<pre>";
    if($col == 1){
    	echo $cars[$row][$col];
    }else{
    	echo "<li>".$cars[$row][$col]."</li>";
    }
  }
  echo "</ul>";
}

// METOD BY FOREACH

// foreach ($cars as $key => $value) {
// echo "<pre>";
// 	 echo "<ul>";
// 	foreach($value as $k => $t){
// 		if($k == 2){
// 			echo $t;
// 		}else{
// 			echo "<li>".$t."</li>";
// 		}
// 	}
// 	echo "</ul>";
// }
?>

