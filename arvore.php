<?php
$oficial = 0;

$novo =  function ($valor) use ($oficial){

	echo $oficial = $valor;
	
};

echo$novo(1);
echo$novo(5);
echo$oficial;