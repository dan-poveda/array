<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 5</title>
</head>
<body>
	<form action="#" method="post">
		<label> ingresar numero</label>
			<input type="text" name="number">
			<button type="submit"> generar </button>
	<header>
		<h1>TALLER # 5</h1>
	</header>
		</form>
		<section>
			<?php
				$sum =0;
				$factorial =1;
				if (isset($_POST["number"])!="") {
					$number= $_POST["number"];
					for ($i=0; $i <$number ; $i++) { 
						$arrayNumber[$i]= rand(1,100);
						$sum = $sum + $arrayNumber[$i];
						$average = $sum/$number; 
						$factorial = $factorial*$arrayNumber[$i];
					}
					echo "Vector = ";
					for ($i=0; $i <$number ; $i++) { 
						echo $arrayNumber[$i]." ";
					}
					echo "<br> El promedio es:".$average;
					echo "<br> El factorial es:".$factorial;
				}

			?>
		</section>

</body>
</html>