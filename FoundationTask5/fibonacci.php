<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$max_num = $_POST["max_num"];

	$first_num = 0;
	$second_num = 1;
	$next_num = 0;

	$output = $first_num . " " . $second_num . " ";

	while ($next_num < $max_num) {
	    $next_num = $first_num + $second_num;
	    $output .= $next_num . " ";

	    $first_num = $second_num;
	    $second_num = $next_num;
	}

	echo $output;
}
?>