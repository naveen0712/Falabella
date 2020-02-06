<?php

$output = array("Linianos", "", "", "Linio", "", "IT", "Linio", "", "", "Linio", "IT", "", "Linio", "", "");
for($i = 1; $i <= 100; $i++) {
	$res = $output[$i%15];
	if($res == "") {
		echo($i . " ");
      		continue;
    	}
  	echo($res . " ");
}

?>
