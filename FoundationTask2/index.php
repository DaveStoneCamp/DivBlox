<?php
//ATTEMPT 1
// function fibonacci(){
//     $Array = [0,1];

//     for($i=2;$i<10;$i++){
//         $Array[$i] = $Array[$i-1] + $Array[$i-2];
//     }

//     return $Array;
// }

//ATTEMPT 2
echo "Task 2.1 </br>";
echo "</br> answer: " ;
function fibonacci() {
    $Array = [0, 1];
    $IntIndex = 2;
    while ($Array[$IntIndex-1] + $Array[$IntIndex-2] <= 34) {
        $Array[$IntIndex] = $Array[$IntIndex-1] + $Array[$IntIndex-2];
        $IntIndex++;
    }
    return $Array;
}

echo "Task 2.1 </br>";
echo "</br> answer: " ;
print_r(fibonacci());

// print_r(fibonacci());

echo "</br>";
echo "</br>";
////////////////////////////////////////////////////////////////////////////////////////////////
echo "Task 2.2 </br>";
//ATTEMPT 1
// function fibonacciRec($position) {
//     if ($position == 0 || $position == 1) {
//         return $position;
//     } else {
//         return fibonacciRec($position - 1) + fibonacciRec($position - 2);
//     }
// }

// echo "</br> answer: ";

// for ($iteration = 0; $iteration <= 0; $iteration++) {
//     echo fibonacciRec($iteration) . "\n";
// }

//ATTEMPT 2
function fibonacci_rec($IntValue) {
    if ($IntValue <= 1) {
        return $IntValue;
    } else {
        return fibonacci_rec($IntValue-1) + fibonacci_rec($IntValue-2);
    }
}

$IntValue = 0;
while (fibonacci_rec($IntValue) <= 34) {
    echo fibonacci_rec($IntValue) . " ";
    $IntValue++;
}
echo "</br>";
echo "</br>";
//coding standards and comparison. hint(while loop)
