<!DOCTYPE html>
<html>
<head>
	<title> TALLER # 8</title>
</head>
<body>
		<form action="#" method="post">
		<header>
			<h1>TALLER # 8</h1>
		</header>
		</form>
		<section>
			<?php
			echo "Multiplos de 3 : ";
			for ($i=0; $i <= 99 ; $i = $i+3) {
				$arrayNumber [$i] =$i;
				echo $arrayNumber[$i]. " , ";
			}
			echo "<br>";
			echo "Multiplos de 2 : ";
			for ($i=0; $i <= 100 ; $i = $i+2) {
				$arrayNumber2 [$i] =$i;
				echo $arrayNumber2[$i]. " , ";
			}
			?>
		</section>
</body>
</html>