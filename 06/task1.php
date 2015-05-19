<!DOCTAYPE HTML>

<html lang="en">
<meta charset="utf-8">
<body>
<?php

$array = array("opel", "lada", "mazda", "toyota", "ford", "fiat");
echo "<p>" . $array[0] . "</p>";
echo "<p>" . $array[1] . "</p>";
echo "<p>" . $array[2] . "</p>";
echo "<p>" . $array[3] . "</p>";
echo "<p>" . $array[4] . "</p>";
echo "<p>" . $array[5] . "</p>";


	$size = count($array);
	for($h = 0; $h < $size; $h++){
		echo "<p>Искам да си купя " . $array[$h] . "!</p>";

	}
unset($array[5]); 

print_r ($array);

$size = count($array);
	for($h = 0; $h < $size; $h++){
		echo "<p>Ще си купя " . $array[$h] . "!</p>";

	}



?>
