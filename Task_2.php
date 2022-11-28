<?php
#Task1
	// $array1=["Html"=>"FRONT","Java"=>"Back"];
	// print_r(array_change_key_case($array1,CASE_LOWER));
	// echo "<br>";


#Task2
	// $array2=['d','e,','v','e','l','o','p','e','r','s'];
	// print_r(array_chunk($array2, 2));
 //    echo "<br>";

#Task3
	// $array3=[
	// 	[
	// 		'id'=> 1223,
	// 		'first_name'=>'Sadig',
	// 		'last_name' => 'Nasirov',
	// 	],
	// 	[
	// 		'id'=> 1224,
	// 		'first_name'=>'Rustem',
	// 		'last_name' => 'Abdullayev',
	// 	],
	// 	[
	// 		'id'=> 1225,
	// 		'first_name'=>'Eldar',
	// 		'last_name' =>'Eyvazov',
	// 	],
	// 	];
	// 	$last_name=array_column($array3,'last_name');
	// 	print_r($last_name);

#Task4
		$first = ['black','night','false'];
		$second = ['white','light','true'];
		// $com = array_combine($first,$second);
		// print_r($com);

		$com = [];
		$j=0;
		foreach($first as $val){
			foreach ($second as $key){
				// $com = array ($val[$j]=>$key[$j]);
				print_r($val);
			}

			$j++;
		}

#Task5
		// $array5 = ["PHP","Java","Java","PHP","PYTHON"];
		// print_r(array_count_values($array5));
?>