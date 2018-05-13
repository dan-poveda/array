<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 2</title>
</head>
<body>
	<header>
		<h1>TALLER # 2</h1>
	</header>
	<section>
		<form action="#" method="post">
			<label> ingresar el numero</label>
			<input type="text" name="number">
			<button type="submit"> CALCULAR </button>
		</form>	
	</section>
	<section>
		<?php
		  if (isset($_POST["number"])!="") {
		    	$number = $_POST["number"];

		    	for ($i=0; $i< $number; $i++) {
		    		$arrayNumber [$i] = rand(1, 20);
		    		echo "vector 1 = " .$arrayNumber[$i] ."<br>";
		    	}
		    	for ($i=0; $i <$number; $ii){
		    		$arrayNumbers[$i] = rand(1, 20);
		    		echo "vector 2 =".$arrayNumbers[$i]."<br>";
		    	}
		    	for ($i=0; $i <$number ; $i++) { 
		    		$arraySuma[$i] = $arrayNumber[$i]+$arrayNumbers[$i]."  ";
		    		echo "la suma es = " .$arraySuma[$i];
		    	}
		    	for ($i=0; $i <$number; $i++){
		    		$arrayResta[$i] = $arrayNumber[$i]-$arrayNumbers[$i]."  ";
		    		echo " la resta es =" .$arrayResta[$i];
		    	}
		    }	
		?>
	</section>	

</body>	
</html>