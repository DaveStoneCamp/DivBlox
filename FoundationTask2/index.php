<?php
function fibonacci(){
    $Array = [0,1];

    for($i=2;$i<10;$i++){
        $Array[$i] = $Array[$i-1] + $Array[$i-2];
    }

    return $Array;
}
echo "Task 2.1 </br>";
echo "</br> answer: " ;

print_r(fibonacci());

echo "</br>";
echo "</br>";
////////////////////////////////////////////////////////////////////////////////////////////////
echo "Task 2.2 </br>";

function fibonacciRec($position) {
    if ($position == 0 || $position == 1) {
        return $position;
    } else {
        return fibonacciRec($position - 1) + fibonacciRec($position - 2);
    }
}

echo "</br> answer: ";

for ($iteration = 0; $iteration <= 9; $iteration++) {
    echo fibonacciRec($iteration) . "\n";
}
echo "</br>";
echo "</br>";

?>
