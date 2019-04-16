<?php

$a=array('0'=>array('Nombre','Apellido','Edad'),
'1'=>array('Carlos','Granda','32'),
'2'=>array('Juan','Martinez','31'),
'3'=>array('María','Jimenez','22'));

echo"<table border='2px black solid'>";
for($x=0; $x<=4; $x++){
	echo"<tr>";
for($y=0; $y<=4; $y++){
	echo "<td>".$a[$x][$y]."</td>";
}
echo "</tr>";
}
echo "</table>";
?>