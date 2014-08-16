<?php
function sumNumbers($num1,$num2) {
    $sum = $num1 + $num2;
    $sum = number_format((float)$sum,2,'.','');
    echo ('$firstNumber + $secondNumber ='." $num1 + $num2 = $sum\n" );
}
sumNumbers(2,7);
sumNumbers(1.567808,0.356);
sumNumbers(1234.5678,333);
?>