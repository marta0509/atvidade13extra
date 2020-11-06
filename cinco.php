<?php
$num1=rand(0,50);
$num2=rand(0,50);

echo $num1;
echo "<br>";
echo $num2;
echo "<br>";

	function multiplo($num1,$num2)
	{
		for ($i=1; $i < $num2; $i++) { 
			if ($num1 * $num1==$num2||$num2 * $num2==$num1) {
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	if (multiplo($num1,$num2)) {
		echo "O numero é multiplo.";
	}
	else
	{
		echo "O numero não é multiplo.";
	}

	
?>