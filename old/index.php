<?php

	echo 'привет мир<br>';
	echo "привет мир";

$a = array(
	'Johny',
	'Bob',
	'Reil'
);

$f = array(
	"name" => "Linkoln",
	"surname" => "Avraam",
	"age" => 67,
	"education" => array(
		"scool",
		"college"
		)
);

echo $f['name'];
echo $a[0];
echo $f['education'][0];

?>