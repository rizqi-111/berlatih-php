<?php
function pasangan_terbesar($angka){
// kode di sini
    $current = 0;
    $max = 0;
    $len = strlen($angka);
    while($current < $len){
        if((int)substr($angka,$current,2) > $max){
            $max = (int)substr($angka,$current,2);
        } 
        $current++;
    }
    return $max."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>