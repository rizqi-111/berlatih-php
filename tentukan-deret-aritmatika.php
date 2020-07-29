<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $idx = 0;
    $nextidx = 1;
    $beda = abs($arr[$idx]-$arr[$nextidx]);
    while($nextidx < count($arr)-1){
        if($beda != abs($arr[$nextidx]-$arr[$nextidx+1])){
            return "false<br>";
        }
        else{
            $nextidx++;
        }
    }
    return "true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>