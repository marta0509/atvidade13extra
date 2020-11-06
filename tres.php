<?php
$temp=rand(0,50);

echo $temp;
echo "<br>";
	function temperatura($temp)
	{
		$cel=0;
		$cel=5*($temp-32)/9;
		return $cel;
	}

	echo temperatura($temp);
?>