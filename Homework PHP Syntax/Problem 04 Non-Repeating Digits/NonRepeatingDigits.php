<?php
function printNumbers($input) {
    $array = array();
    if($input <= 101) {
       array_push($array,'no');
    }

    for ($i = 102 ; $i <= $input;$i++) {
            $number = $i;
            $num1 = $number % 10;
            $number /= 10;
            $num2 = $number % 10;
             $number /= 10;
            $num3 =  $number% 10;
        if($num1 != $num2 && $num2 != $num3 && $num1 != $num3 && $i <=999) {
            array_push($array,$i);

        }
    }
    foreach ($array as $key =>$value) {
        if ($key != sizeof($array) - 1) {
            echo $value . ", ";
        } else {
            echo($value);
        }
    }
    echo "\n";
}
 printNumbers(1234);
 printNumbers(145);
 printNumbers(15);
printNumbers(247);
?>