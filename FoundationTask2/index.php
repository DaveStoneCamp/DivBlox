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

function fibonacciRec($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacciRec($n - 1) + fibonacciRec($n - 2);
    }
}

echo "</br> answer: ";

for ($i = 0; $i <= 9; $i++) {
    echo fibonacciRec($i) . "\n";
}
echo "</br>";
echo "</br>";

?>
