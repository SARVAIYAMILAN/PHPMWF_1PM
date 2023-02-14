<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compound_interests</title>
</head>
<body>

    <center>
    <form method="post">
        <h3>enter the amount</h3>
        <input type="number" name="a" required><br><br>
        <h3>enter year </h3>
        <input type="text" name="y" required>
        <h3>enter interest</h3>
        <input type="text" name="i" required><br><br>
        <input type="submit" name="ca" value="submit">
    </form>

    <?php

        if(isset($_POST["ca"]))
        {
            $p=$_POST["a"];
            $t=$_POST["y"];
            $r=$_POST["i"];
            $ci;
            $ci=$p*pow((1+$r/100),$t)-$p;                       
            echo"your interest is".$ci;
        }

    ?>

    </center>
    
</body>
</html>