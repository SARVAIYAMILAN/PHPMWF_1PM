<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swap number</title>
</head>
<body>

    <center>
        <form method="post">
            <h3>enter 1st number</h3><br><br>
            <input type="number" name="ab" require>
            <h3>enter 2nd number</h3><br><br>
            <input type="number" name="bc" require><br><br>
            <input type="submit" name="swap" value="submit">

        </form>

        <?php

            if(isset($_POST["swap"]))
            {
                $a=$_POST["ab"];
                $b=$_POST["bc"];
                

                echo "Before swap"."<br>a is &nbsp" .$a." &nbspb is ".$b."<br>";

                $a=$a+$b;
                $b=$a-$b;
                $a=$a-$b;

                echo "after swap"."<br>a is &nbsp" .$a." &nbspb is ".$b."<br><br>";
            }
        ?>
    </center>
    
</body>
</html>