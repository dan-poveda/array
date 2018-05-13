<!DOCTYPE html>
<html>
<head>
	<title>TALLER # 12</title>
</head>
<body>
	<form action="#" method="post">
		<h1>TALLER # 12</h1>
	</form>
	<section>
		<?php
  			for($i = 2;$i <= 100;$i++){
     			 $Prime= true;
       			for($j = 2;$j < $i;$j++){
       				if($i % $j == 0){
         				$Prime = false;
      			 	}
       			}
       			if($Prime){
        		echo $i . " , ";
        		}
        	}
		?>
	</section>

</body>
</html>