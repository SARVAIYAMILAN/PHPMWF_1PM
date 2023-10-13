<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area of rectangle</title>
</head>
<body>


        <form method="post">
            <h3>enter the  length of rectangle</h3>
            <input type="number" name="l" required><br><br>
            <h3>enter the breath of rectangle</h3>
            <input type="number" name="b" require><br><br>
            <input type="submit" name="sum" value="submit">
        </form>

            <?php

            if(isset($_POST["sum"]))
            {
                $len=$_POST["l"];
                $bre=$_POST["b"];
                $to;

                $to=$len*$bre;

                echo"area of rectangle is" .$to;

            }

            ?>

    
</body>
</html>