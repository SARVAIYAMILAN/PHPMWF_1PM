<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>square_qube</title>
</head>
<body>

<center>
    <form method="post">
        <h3>enter the number</h3>
        <input type="number" name="ab" require>
        <br><br>
        <input type="submit" name="sub" value="submit">
        <br><br>
    </form>

    <?php
    if(isset($_POST["sub"]))
    {
        $number=$_POST["ab"];
        $square;
        $qube;
        
        $square=$number*$number;
        $qube=$number*$number*$number;

        echo "squre of :" .$square."<br>";
        echo "qube of :" .$qube. "<br>";

    }
    ?>
</center>
    
</body>
</html>