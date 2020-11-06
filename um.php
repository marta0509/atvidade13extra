<?php
$num=rand(0,50);

echo $num;
echo "<br>";
	function primos($num)
	{
		if ($num % 2 != 0) {
			return true;
			
		}
		else{
			return false;
			
		}
	}

	if (primos($num)) {
		echo "O numero é primo.";
	}
	else
	{
		echo "O numero não é primo.";
	}
?>