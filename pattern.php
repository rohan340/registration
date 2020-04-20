<?php
$k=0;
for($i=1;$i<=5;$i++){
	$k = $k+$i;
	for($j=1;$j<=$k;$j++){
		echo '*';
	}
	for($zero=1;$zero<=$i;$zero++){
		echo '0';
	}
	echo '<br>';
}