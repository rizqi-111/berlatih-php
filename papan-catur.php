<?php

function papan_catur($angka) {
// tulis kode di sini
    $papan = "";
    for($i = 1; $i <= $angka; $i++){
        if($i % 2 == 1){
            $j = 1;
            while($j <= $angka){
                $papan .= "#";
                
                if($j != $angka){
                    $papan .= " ";
                }
                $j++;
            }
        } else {
            $j = 1;
            while($j <= $angka){
                $papan .= " ";
                
                if($j != $angka){
                    $papan .= "#";
                }

                $j++;
            }
        }
        $papan .= "<br>";
    }
    return $papan."<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/