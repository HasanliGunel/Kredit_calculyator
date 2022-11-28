<?php 
	// $test = array("red","white","black");
	// $result = array_pad($test, 6, "green");
	// echo '<ol>';
	// for($i=0; $i < count($result); $i++){
	// 	echo '<li>', $result[$i],'</li>';
	// }
	// echo '</ol>'


	// $test = array (7,2,7);
	// echo array_product($test);

	
	// $test = array("red","white","black");
	// array_push($test, "yellow","green","blue");
	// echo '<ol>';
	// for($i=0; $i < count($test); $i++){
	// 	echo '<li>', $test[$i],'</li>';
	// }
	// echo '</ol>'
	

	// $test = array("red","white","black","yellow","blue","pink");
	// $random=array_rand($test,2);
	// echo $test[$random[0]],"<br>";
	// echo $test[$random[1]],"<br>";

	// $test = array("red","white","black","yellow","blue","pink");
	// echo array_rand($test,1),"<br>";

	// $test1 = array("h"=>"horse", "r"=>"rabit", "b"=>"bird", "c"=>"cat","d"=>"dog");
	// echo array_rand($test1);

	// $test1 = array("h"=>"horse", "r"=>"rabit", "b"=>"bird", "c"=>"cat","d"=>"dog");
	// $result = array_rand($test1,2);
	// echo '<ol>';
	// for ($i = 0; $i < count($result); $i++)
	// 	echo "<li>", $result[$i], "</li>";
	// echo '</ol>';

	// function transform($p1,$p2){
	// 	return $p1. '-'. $p2;
	// };
	// $test1 = array("horse", "rabit", "bird", "cat","dog");
	// echo array_reduce($test1,'transform');

		function transform($p1,$p2){
		return $p1. '-'. $p2;
	};
	$test1 = array("horse", "rabit", "bird", "cat","dog");
	echo array_reduce($test1,'transform', "animal");
?>