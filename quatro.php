<?php
$alt=1.50;
$sexo="F";

echo $alt;
echo "<br>";
echo $sexo;
echo "<br>";

	function peso($alt,$sexo)
	{
		$peso=0;
		if ($sexo=="F") {
			$peso=62.1*$alt-44.7;
		}
		else
		{
			$peso=72.7*$alt-58;
			
		}
		return $peso;
	}
	

	$peso=peso($alt,$sexo);
	echo "O peso ideal é: " .$peso ."kg";
?>