<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 10</title>
</head>
<body>
	<form action="#" method="post">
		<h1>ejercicio 10</h1>
		<label>ingrese el ultimo numero que desee mostrar</label>
		<input type="text" name="number">
		<button>INGRESAR</button>
	</form>
	<section>
		<?php
			if (isset($_POST['number'])!="") {
				$number = $_POST['number'];
				echo "Numeros que se van a mostrar: ";
				for ($i=1; $i <= $number ; $i++) { 
					$numbers[$i] = $i;
					echo $numbers[$i] . " - ";
				}
			}
		?>
	</section>

</body>
</html>