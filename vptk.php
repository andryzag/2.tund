<?php

	$age = 10;
	
	if ($age < 15) {
		
		echo "kloun";
		
	} else {
		
		echo "ei ole kloun";
		
	}

?>

<br>

<?php

	// eesmärk vanusele vastavalt
	// trükime välja 'palju'
	
	for( $i = 0; $i <= $age ; $i = $i + 1) {
		
		echo "$i.palju ";
	}
	
	echo "õnne!";
	
?>