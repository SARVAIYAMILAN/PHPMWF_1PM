<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>average marks</title>
</head>
<body>



    <form method="post">
        <h3>enter the maths mark</h3>
        <input type="number" name="m" require><br><br>
        <h3>enter the checmistry marks</h3>
        <input type="number" name="c" require><br><br>
        <h3>enter the computer mark</h3>
        <input type="number" name="co" require><br><br>
        <input type="submit" name="sub" value="submit">
    </form>

    <?php

    if(isset($_POST["sub"]))
    {
        $maths=$_POST["m"];
        $checmistry=$_POST["c"];
        $computer=$_POST["co"];
        $to;
        $ave;
        $to=$maths+$checmistry+$computer;
        $ave=$to/300*100;

        if(0<$ave ||100>$ave)
        {

        echo"everage is".$ave;

        }
        else
        {
            echo"enter valid number";
        }


        
    }

    ?>


    
</body>
</html>