<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if(strrev($angka) == $angka){
      $angka += 1;
      if(strrev($angka) == $angka){
          return $angka."<br>";
      }
        return palindrome_angka($angka+1);
  }
  else {
    while(strrev($angka) != $angka){
        $angka += 1;
    }
    return $angka."<br>";
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>