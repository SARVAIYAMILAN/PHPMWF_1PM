
<?php
// Number of rows in the pattern
$rows = 5;

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {

    // Print asterisks for the first and last row
    if ($i == 1 || $i == $rows) {
        for ($j = 1; $j <= $rows; $j++) {
            echo "*";
        }
    } 
    // For all other rows, print only the first and last asterisk
    else {
        echo "*";
        for ($j = 1; $j <= $rows - 2; $j++) {
            echo " ";
        }
        echo "*";
    }
    
    // Move to the next line
    echo "\n";
}
?>





