<?php 
	$user = "PHP";
	// echo !empty($user) ? $user : "Qeydiyyat tapilmadi";
	// if(isset($_GET["user"])){
	// 	echo $_GET["user"];
	// } else {
	// 	echo "Qeydiyyat tapilmadi";
	// }

	echo $_GET["user"] ?? "Qeydiyyat tapilmadi";
?>