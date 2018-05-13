<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO ARRAYS PHP</title>
</head>
<body> 
	<header>
		<h1>EJEMPLO ARRAYS PHP</h1>
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
		    		$arrayNumber [$i] = rand(1, 1000);
		    		echo $arrayNumber [$i]. "<br>";
		    	}
		    	echo "los numeros pares son: <br>";
		    	for ($i=0; $i< $size; $i++) {
		    		if($arrayNumber [$i]%2==0)
		    			echo $arrayNumber[$i]."<br>"
		    	}
		    }
		?>    
	</section>

</body>
</html>