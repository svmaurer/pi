<?php

echo "Pi berechnen\n";
echo "============\n\n";
$p = 0;
$k = 500000000;

for ($i=0; $i < $k; $i++){
	$p = $p + 4*(pow(-1,$i)/(2*$i+1));
}
echo "Pi berechnet ist: \n";
echo $p."\n";
echo "3.1415926535897 -> wahres Pi"
?>
