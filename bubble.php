<?php
//Function bubble sort for sort array number
function bubbleSort($data) {
    $size = count($data)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($data[$k] < $data[$j]) {
                list($data[$j], $data[$k]) = array($data[$k], $data[$j]);
            }
        }
    }
    return $data;
}

//array data input
$data = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
$sort = bubbleSort($data);
print_r($sort);

?>
