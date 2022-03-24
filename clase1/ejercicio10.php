<?php
$lapicera1 = array("color"=>"rojo", "marca"=>"bic", "trazo"=>"grueso", "precio"=>45);
$lapicera2 = array("color"=>"negro", "bic"=>"faber", "trazo"=>"fino", "precio"=>22);
$lapicera3 = array("color"=>"azul", "marca"=>"bic", "trazo"=>"grueso", "precio"=>73);
$vec = array();

array_push($vec, $lapicera1, $lapicera2, $lapicera3);

for ($i=0; $i < count($vec); $i++) { 
	
	echo "<br/><br/>";

	foreach ($vec[$i] as $key => $value) {
	
	print("<br/> Clave: $key - Valor: $value");
	
	}
}
?>