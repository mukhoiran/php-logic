<?php
$array = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
$highest = 0;

foreach($array as $item){
    if ($item > $highest){
        $highest = $item;
    }
}
echo $highest;
?>
