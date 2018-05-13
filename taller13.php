<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 13</title>
</head>
<body>
	<form action="#" method="post">
		<h1>TALLER # 13</h1>
	</form>
	</section>
	<section>
		<form action="Ejercicio13a.php" method="post">
		<?php
			for ($i=0; $i < 10 ; $i++) { 
				?>
				<label>Numero <?php echo $i ?></label>
				<input type="text" name="number<?php echo $i ?>">
				<br> 
			}
			?>
			<button type="submit">INGRESAR</button>
		</form>	
	</section>

</body>
</html>