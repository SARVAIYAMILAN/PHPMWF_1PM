
<?php

$rows = 5;


for ($i = 1; $i <= $rows; $i++) {


    if ($i == 1 || $i == $rows) {
        for ($j = 1; $j <= $rows; $j++) {
            echo "*";
        }
    } 

    else {
        echo "*";
        for ($j = 1; $j <= $rows - 2; $j++) {
            echo " ";
        }
        echo "*";
    }
    

    echo "\n";
}
?>





