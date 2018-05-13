<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 11</title>
</head>
<body>
	<form action="#" method="post">
		<h1>TALLER # 11</h1>
		<label>Multiplos de 3</label>
		<input type="text" name="number">
		<button>CONTAR</button>
	</form>
	<section>
		<?php
			if (isset($_POST['number'])!="") {
				$number = $_POST['number'];
				echo "Numeros que se van a mostrar: ";
				for ($i=3; $i <= $number ; $i = $i + 3) { 
					$numbers[$i] = $i;
					echo $i, " <br> ";
				}
			}
		?>
	</section>
</body>
</html>