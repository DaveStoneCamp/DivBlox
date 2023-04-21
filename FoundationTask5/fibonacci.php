<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$IntMaxNum = $_POST["IntMaxNum"];

	$IntFirstNum = 0;
	$IntSecondNum = 1;
	$IntNextNum = 0;

	$IntOutput = $IntFirstNum . " " . $IntSecondNum . " ";

	while ($IntNextNum < $IntMaxNum) {
	    $IntNextNum = $IntFirstNum + $IntSecondNum;
	    $IntOutput .= $IntNextNum . " ";

	    $IntFirstNum = $IntSecondNum;
	    $IntSecondNum = $IntNextNum;
	}

	echo $IntOutput;
}
?>