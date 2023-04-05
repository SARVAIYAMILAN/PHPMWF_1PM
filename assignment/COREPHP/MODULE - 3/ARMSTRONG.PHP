<?php
$num = 154; // change this to the number you want to check
$sum = 0;
$temp = $num;
$n = strlen($num);

while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += pow($remainder, $n);
    $temp = floor($temp / 10);
}

if ($num == $sum) {
    echo "$num is an Armstrong number.";
} else {
    echo "$num is not an Armstrong number.";
}
?>

