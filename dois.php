<?php
$num=rand(0,50);


echo $num;
echo "<br>";
	function perfeito($num)
	{
		$soma=0;
		for ($i=$num-1; $i>=1 ; $i--) { 
			if ($num%$i==0) {
				$soma=$soma+$i;		
			}
			else
			{
				
			}
		}
		return $soma;
	}	
	echo perfeito($num);
?>