<?php 
	// $test = array("Almaz"=> "20",
	// 			  "Gulnaz"=> "50",
	// 			  "Shahnaz" => "40",
	// 			   "Lale" => "30");
	// print_r(array_keys($test));

	// $test = array("Almaz"=> "30",
	// 			  "Gulnaz"=> "50",
	// 			  "Shahnaz" => "40",
	// 			   "Lale" => "30");
	// print_r(array_keys($test,"30"));

	// $test = array(10,19,40,"19");
	// print_r(array_keys($test));

	// $test = array(10,19,40,"19");
	// print_r(array_keys($test,"19",false));

	// $test = array(10,19,40,"19");
	// print_r(array_keys($test,"19",true));

	// function kub($par){
	// 	return $par*$par*$par;
	// };
	// $test = array(1,2,3,4,5,6);
	// $result = array_map("kub", $test);
	// print_r($result);

	// function isSame($p1,$p2){
	// 	if($p1===$p2)
	// 		return "Verilenler eynidir";
	// 	else
	// 		return "Verilenler eyni deyil"; 
	// }
	// $test1 = array("horse","dog","bird");
	// $test2 = array("rabbit", "dog","cat");
	// $result = array_map("isSame",$test1,$test2);
	// print_r($result);

	// $test1 = array("horse","dog","bird");
	// $test2 = array("rabbit", "bear","cat");

	// print_r(array_merge($test1,$test2));

	// $test1 = array("a" => "red","b" => "green");
	// $test2 = array("c" => "blue","b" => "pink");

	// // print_r(array_merge_recursive($test1,$test2));
	// $result = array_merge_recursive($test1,$test2);
	// foreach($result as $key => $val){
	// 	if($key == "b")
	// 	{
	// 		echo "<br>", $key , "<br>";
	// 		for($i=0; $i<count($val); $i++){
	// 			echo $val[$i],"<br>";
	// 		};
	// 	}
	// 	else{
	// 		echo $key,"<br>", $val;
	// 	};
	// };

	// $test1 = array("dog","cat","horse","bear","rabbit","bird");
	// array_multisort($test1);
	// for($i=0; $i<count($test1); $i++){
	// 	echo $test1[$i], "<br>";
	// }


	// $test1 = array("dog","cat","horse","bear","rabbit","bird");
	// array_multisort($test1, SORT_DESC);
	// for($i=0; $i<count($test1); $i++){
	// 	echo $test1[$i], "<br>";
	// }


	// $test1 = array("Dog","cat","Horse","Bear","rabbit","bird");
	// $j=0;
	// foreach($test1 as $element){
	// 	$test1[$j] = strtolower($element);
	// 	$j++;
	// }
	// array_multisort($test1, SORT_DESC, SORT_STRING);
	// for($i=0; $i<count($test1); $i++){
	// 	echo $test1[$i], "<br>";
	// }


	$test1 = array(1,2,34,76,54);
	$test2 = array(43,35,65,37,21);
	$merge = array_merge($test1,$test2);
	array_multisort($merge,SORT_ASC,SORT_NUMERIC);
	for($i=0; $i<count($merge); $i++){
		echo $merge[$i], "<br>";
	}
?>