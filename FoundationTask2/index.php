<?php

// function fibo34($endpoint)
// {
//     $fiboSequence = [0, 1];

//     for($position = 2; $position <= $endpoint ;$position++){

//         $fiboSequence[$position] = $fiboSequence[$position-1] + $fiboSequence[$position-2];

//     }

//     return $fiboSequence;

// };

// print_r(fibo34(9));


echo "Task 2.1 </br>";
echo "</br> answer: ";
$a = 0;
$b = 1;
echo $a . "\n";
while ($b <= 34) {
    echo $b . "\n";
    $temp = $a;
    $a = $b;
    $b = $temp + $b;
}
echo "</br>";
echo "</br>";
////////////////////////////////////////////////////////////////////////////////////////////////
echo "Task 2.2 </br>";

function fibonacci($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}


echo "</br> answer: ";
for ($i = 0; $i <= 9; $i++) {
    echo fibonacci($i) . "\n";
}
echo "</br>";
echo "</br>";

// function fibonacci($n) {
//     return ($n < 2) ? $n : fibonacci($n - 1) + fibonacci($n - 2);
// }

// for ($i = 0; $i <= 34; $i++) {
//     echo fibonacci($i) . "\n";
// }
