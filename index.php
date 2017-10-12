<?php

	function welkeType($watIs)
	{
		return "De waarde is" . gettype($watIs) . PHP_EOL;
	};

	$array = ['Appel', 'Citroen', 'Banaan', 'Kiwi'];

	echo welkeType('tekst');
	echo welkeType(true);
	echo welkeType(1.54);
	echo welkeType(5);
	echo welkeType($array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>