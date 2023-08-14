<?php

function oddOrNot() {
    $array = array(6);

    $number = $array[0];
    
    if($number % 2 == 0) {
        echo 'Bilangan Genap';
    }
    else {
        echo 'Bilangan Ganjil';
    }
}

oddOrNot();