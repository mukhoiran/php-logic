<?php
// function for get squence row number
function squenceRow($number){
  for ($i=1; $i <= $number; $i++) {
    $array[$i] = $i;
  }
  foreach ($array as $value) {
    for ($x=1; $x <= $value; $x++) {
      echo $x;
    }
    echo "<br />";
  }
}

//input number
$number = 8;
squenceRow($number);
?>
