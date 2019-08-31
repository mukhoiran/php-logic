<?php
// function for get squence row number
function squenceRow2($number,$limit){
  for ($i=1; $i <= $number; $i++) {
    $array[$i] = $i;
  }
  for ($i=1; $i <= $limit ; $i++) {
    for ($j=$i; $j <= $number; $j++) {
      echo $array[$j];
      $j = $j + 3;
    }
    echo "<br />";
  }
}

//input number
$number = 12;
$limit = 4;
squenceRow2($number,$limit);
?>
