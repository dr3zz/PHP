<?php

function checkNumeric($input) {
    if(is_numeric($input)) {
        echo var_dump($input);
    } else {
        echo gettype($input)."\n";
    }

}

checkNumeric('hello');
checkNumeric(15);
checkNumeric(1.234);
checkNumeric(array(1,2,3));
checkNumeric((object)[2,34]);
?>