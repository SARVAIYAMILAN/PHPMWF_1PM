<<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body> 

     <!-- html start from here -->
     <center>
     <form method="post">
        <h3>enter the number </h3>

        <input type="text" name="number" required><br><br>
        <input type="submit" name="odd" value="submit">

    </form>

    <!-- php start from here -->

    <?php
    
    if(isset($_POST["odd"]))
    {
        $number=$_POST["number"];

        if($number%2==0)
        {
            echo"number is even";
        }
        else
        {
            echo"number is odd";
        }
    }

    ?>
    </center>
    
    </body>
</html>