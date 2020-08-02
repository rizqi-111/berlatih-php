<?php 
// function hitung($string_data){
    
//     for($i = 0; $i < strlen($string_data); $i++){
//         if(!is_numeric($string_data[$i])){
//             $operator = $string_data[$i];
//             $angka1 = substr($string_data,0,$i);
//             $angka2 = substr($string_data,$i+1,strlen($string_data)-1);
//         }
//     }
//     switch($operator){
//         case "*": $hasil = (int)$angka1 * (int)$angka2; break; 
//         case "-": $hasil = (int)$angka1 - (int)$angka2; break;
//         case "+": $hasil = (int)$angka1 + (int)$angka2; break;
//         case ":": $hasil = (int)$angka1 / (int)$angka2; break;
//         case "%": $hasil = (int)$angka1 % (int)$angka2; break;
//     }
//     return $hasil;
//     // return $angka1."<br>".$angka2."<br>".$operator."<br>".strlen($string_data);
// }

// echo hitung("102*2")."<br>";
// echo hitung("2+3")."<br>";
// echo hitung("100:25")."<br>";
// echo hitung("10%2")."<br>";
// echo hitung("99-2")."<br>";

function perolehan_medali($arr){
//kode di sini

    $result = [];
    foreach($arr as $a){
        if(isset($a[1])){
          if(array_search($a[0], array_column($result, 'negara')) === false){
            $result[] = array("negara"=>$a[0],"emas"=>(int)0,"perak"=>(int)0,"perunggu"=>(int)0);
          }        
        }
    }

    foreach($result as $r => $v){
        foreach($arr as $a){
          if($result[$r]["negara"] == $a[0]){
              if(isset($a[1])){
                if($a[1]=="emas"){
                  $result[$r]["emas"]++;
                }
                else if($a[1]=="perak"){
                  $result[$r]["perak"]++;
                }
                else {
                  $result[$r]["perunggu"]++;
                }
              }
          }
      }
    }

    return $result;
}

// TEST CASES
$arr = array(
    array('malay','perunggu'),
    array('malay','emas'),
    array('ind','perak'),
    array('india','perunggu'),
    array('ind','perunggu'),
    array('india','perunggu')
);
echo "<pre>";
print_r(perolehan_medali($arr));
echo "</pre>";
?>