<?php
function isPrime($n) {
    for($x=2; $x<$n; $x++) {
      if($n % $x == 0) { return false;}
    }
    return true;
}
$number = 17;
$check = isPrime($number);
echo $check ? $number.' is a Prime Number.' :  $number.' is not a Prime Number.';
?>
