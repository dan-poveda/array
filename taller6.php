<!DOCTYPE html>
<html>
<head>
	<title> TALLER # 6</title>
</head>
<body>
	<form action="#" method="post">
	<header>
		<h1>TALLER # 6</h1>
	</header>
		</form>
		<section>
			<?php
				echo "Impresion de los numeros 0 al 100 en forma decreciente";
				for ($i=100; $i >= 0 ; $i--) {
					$arrayNumber [$i] =$i;
					echo $arrayNumber[$i]."<br>"; 
				}
			?>
		</section>		
	

</body>
</html>