<?php
    $myString = $_COOKIE["cam"];
$myArray = explode(',', $myString);
$seat_al2=array('1_1','1_2','1_4','1_5','2_1','2_2','2_4','2_5','3_1','3_2','3_4','3_5','4_1','4_2','4_4','4_5','5_1','5_2','5_4','5_5','6_1','6_2','6_4','6_5','7_1','7_2','7_4','7_5','8_1','8_2','8_4','8_5','9_1','9_2','9_4','9_5','10_1','10_2','10_4','10_5','11_1','11_2','11_4','11_5','12_1','12_2','12_3','12_4','12_5');
  
   $d=array();
foreach ($myArray as $pal){
    $key = array_search($pal, $seat_al2)+1;
    //$d2=$seat_al2[$key];
    array_push($d, $key);
    
}
?>