<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max number </title>
</head>
<body>
    
    <center>
        <form method="post">
            <h3>enter 1<sup></sup>st</sub> number</h3><br><br>
            <input type="number" name="a" require>
            <h3>enter 2<sup>nd</sup> number</h3><br><br>
            <input type="number" name="b" require><br><br>
            <h3>enter 3<sup>rd</sup>number</h3><br><br>
            <input type="number" name="c" require><br><br>
            <input type="submit" name="max" value="submit">


        </form>
        <?php

            if(isset($_POST["max"]))
            {

            $a=$_POST["a"];
            $b=$_POST["b"];
            $c=$_POST["c"];

            if($a > $b && $a > $c)
            {
                echo"biggest number is:".$a;
            }
            if($b > $a && $b > $c)
            {
                echo"biggest number is:" .$b;
            }
            if($c > $a && $c > $b)
            {
                echo"biggest number is:" .$c;
            }
        }
        ?>
    </center>

</body>
</html>