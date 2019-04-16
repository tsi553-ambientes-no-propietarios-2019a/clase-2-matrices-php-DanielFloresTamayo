<?php
$pais=array
(
"persona" =>array
   (
   "Nombre"=>"Carlos ",
   "Apellido"=>"Adrian ",
   "Edad"=>"21 "
   ),
#echo <br>;
"persona1" =>array
   (
   "Nombre"=>"Marlon ",
   "Apellido"=>"Farías ",
   "Edad"=>"45 "
   ),
"persona2" =>array
   (
   "Nombre"=>"Josselyn ",
   "Apellido"=>"Cervántez ",
   "Edad"=>"14 "
   )
);

#echo $pais["persona"]["Nombre"];

echo '--------------------------------TABLA------------------------------------';

echo '<br>';
foreach ($pais as $value) {
   #echo $key .' ';
   #echo $pais["persona"]["Nombre"];
   #echo $value;
   print_r($value);
   echo '<br>';
}