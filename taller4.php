<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 4</title>
</head>
<body>
	<header>
		<h1>TALLER # 4</h1>
		</header>
	<section>
		<form action="#" method="post">
			<label> ingrese cantidad de numeros del array</label>
			<input type="text" name="size">
			<button type="submit"> generar </button>
		</form>	
	</section>
	<section>
		<?php
		    if (isset($_POST['size'])!="") {
		    	$size = $_POST['size'];
		    	for ($i=0;$i<$size;$i++) {
		    		$arrayNumber [$i] = rand(1, 100);
		    		echo $arrayNumber [$i]. "<br>";
		    	}
		    }
		?>
	</section>	    	

</body>
</html>