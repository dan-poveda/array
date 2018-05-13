<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 3</title>
</head>
<body>
	<header>
		<h1>TALLER # 3</h1>
	</header>
	<section>
		<form action="#" method="post">
			<label> ingresar el numero</label>
			<input type="text" name="size">
			<button type="submit"> GENERAR </button>
		</form>	
	</section>
		<section>
		<?php
		    if (isset($_POST['size'])!="") {
		    	$size = $_POST['size'];
		    	for ($i=0;$i<$size;$i++) {
		    		$arrayNumber [$i] = rand(1, 50);
		    		echo $arrayNumber [$i]. "<br>";
		    	}
		    	echo "los numeros pares son: <br>";
		    	for ($i=0; $i< $size; $i++) {
		    		if($arrayNumber [$i]%2==0)
		    			echo $arrayNumber[$i]."<br>";
		    	}
		    	 	echo "los numeros impares son: <br>";
		    	for ($i=0; $i< $size; $i++) {
		    		if($arrayNumber [$i]%2!=0)
		    			echo $arrayNumber[$i]."<br>";
		    }
		}
		?>    
	</section>

</body>
</html>