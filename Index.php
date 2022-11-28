<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Task</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<style>
		.textStyle {
			font-size: 12px;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
</head>

<body>
	<?php
	$message = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$kreditMebleg = $_POST['k_m'] ?? 2000;
		$faizDerecesi = $_POST['f_d'] ?? 5;
		$teqvimAyi    = $_POST['t_a'] ?? 12;

		// print_r($_POST); die;
		if (array_key_exists('Button', $_POST)) {
			if (empty($_POST['k_m']) || empty($_POST['f_d']) ||  empty($_POST['t_a'])) {
				$message = "Zəhmət olmasa bütün parametrləri doldurun";
			}
		}
	} else {
		$kreditMebleg = 2000;
		$faizDerecesi = 5;
		$teqvimAyi = 12;
	}
	?>
	<div class="wrapper">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div  class="row">
				<p><span class="alert alert-danger"><?= $message ?></span></p>
				<div class="col-6">
					<div class="form-group">
						<label class="textStyle">Kreditin məbləği:</label>
						<input type="number" class="form-control" class=".input" id="exampleFormControlInput1" name="k_m" value="<?php echo $kreditMebleg; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label class="textStyle">Faiz dərəcəsi:</label>
						<input type="number" class="form-control" id="exampleFormControlInput1" name="f_d" value="<?php echo $faizDerecesi ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label class="textStyle">Təqvim ayı:</label>
						<input type="number" class="form-control" id="exampleFormControlInput1" name="t_a" value="<?php echo $teqvimAyi ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="submit" name="Button" class="btn btn-success w-100" class=".button" id="exampleFormControlInput1" value="Hesabla" , onclick="select">
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col-6">
				<div class="form-group mt-2">
					<?php $faizMebleg = ($kreditMebleg * $faizDerecesi) / 100 ?>
					<label class="textStyle"><?php $yekunmebleg = $faizMebleg + $kreditMebleg ?></label>
					<label class="textStyle"><?php $ayMebleg = $yekunmebleg / $teqvimAyi ?></label>

					<div class="card bg-light">
					<?php if(isset($_POST)):?>

						<div class="card-header">Nəticə</div>
						<div class="card-body">
							<h5 class="card-title">Kreditin məbləği: <?php echo $kreditMebleg ?><span class="ml-2">AZN</span></h5>
							<h5 class="card-title">Faiz dərəcəsi: <?php echo $faizDerecesi ?><span class="ml-2">%</span></h5>
							<h5 class="card-title">Təqvim ayı:<?php echo $teqvimAyi ?><span class="ml-2">ay</span></h5>
							<h5 class="card-title">Faiz üzrə ödəniləcək məbləğ:<?php echo $faizMebleg ?><span class="ml-2">AZN</span></h5>
							<h5 class="card-title">Ödəniləcək yekun məbləğ: <?php echo $yekunmebleg ?><span class="ml-2">AZN</span></h5>
							<h5 class="card-title">Hər ay üzrə ödəniləcək məbləğ: <?php echo number_format($ayMebleg, 2) ?><span class="ml-2">AZN</span></h5>
						</div>
						<?php else:?>
							<?php echo "y"?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script>
		const input = document.querySelector(".input");
		const input = document.querySelector(".button");
		button.disabled = true;
		input.addEventListener("change", stateHandle);
		 function stateHandle(){
			if(document.querySelector(".input").value === ""){
				button.disabled = true;
			}else{
				button.disabled = false;
			}
		 }
		 button.addEventListener("click",() =>{
    	console.log("You entered:", document.querySelector(".input").value);
})
	</script> -->
</body>

</html>