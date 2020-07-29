<?php
function skor_terbesar($arr){
//kode di sini
    $kelas = [];
    foreach($arr as $a){
        if(!in_array($a["kelas"],$kelas)){
            array_push($kelas,$a["kelas"]);
        }
    }
    
    $result = [];
    foreach($kelas as $k){
        foreach($arr as $a){
            if($a["kelas"] == $k){
                if(!isset($result[$k])){
                    $result[$k]= $a;
                    continue;
                }
                if($a["nilai"] > $result[$k]["nilai"]){
                    $result[$k] = $a;
                }
            }
        }
    }
    return $result;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>