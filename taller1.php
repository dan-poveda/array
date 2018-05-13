<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 1</title>
</head>
<body>
	<header>
		<h1> TALLER # 1</h1>
	</header>
	<section>
		<form action="#" method="post">
			<label> ingrese la tabla que quiere consultar</label>
			<input type="text" name="table">
			<button type="submit"> MULTIPLICAR </button>
		</form>	
	</section>
	<section>
		<?php
		    if(isset($_POST ['table'])!="") {
		    	$table = $_POST ['table'];
		    	for ($i=0; $i <= 11; $i++) {
		    		$solution = $table * $i;
		    		echo $table ."*" .$i ."=" .$solution ."<br>";
		    	}
		    }
		?>
	</section>	    

</body>
</html>