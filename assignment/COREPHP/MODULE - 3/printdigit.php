<?php
$num_rows = 3;
$num_cols = 2;
$start_num = 26;

echo $num_cols . " " . ($start_num + $num_rows - 1) . "\n"; // prints first line

for ($i = 0; $i < $num_rows; $i++) {
  $row = "";
  for ($j = 0; $j < $num_cols; $j++) {
    $row .= ($start_num + $i + $j) . ($j == $num_cols - 1 ? "" : " ");
  }
  echo $row . "\n";
}
?>
