<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple_interest</title>
</head>
<body>
    <center>
    <form method="post">
       <h3>enert amount :</h3>
       <input type="text" name="a" required><br><br>
       <h3>enter year :</h3>
       <input type="text" name="y" required><br><br> 
       <h3>enter interest :</h3>
       <input type="text" name="i" required><br><br>
       <input type="submit" name="sub" value="submit">
    </form>


    <?php
    if(isset($_POST["sub"]))
    {

    $p=$_POST["a"];
    $t=$_POST["y"];
    $r=$_POST["i"];
    $a;
    $a=($p*$t*$r)/100;

    echo "your interest is =" .$a;
    } 
    ?>


    </center>
    
</body>
</html>