<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area of rectangele</title>
</head>
<body>
    <?php
    if(isset($_POST["sum"]))
    {
        $lan=$_POST["L"];
        $bre=$_POST["R"];
        $to;

        $to=$lan*$bre;


        echo "Area of Rectangle : ".$to;

    }

    ?>
    <form method="post">
    <h3>Enter the Length of Rectangle</h3>
    <input type="text" name="L" required><br><br>
    <h3>Enter the Breadth of Rectangle </h3> 
    <input type="text" name="R" required ><br><br>
    <input type="submit" name="sum" value="submit">
    </form>

</body>
</html>
Footer