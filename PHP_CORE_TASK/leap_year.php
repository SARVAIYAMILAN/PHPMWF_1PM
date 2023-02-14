<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leap year</title>


</head>
<body>

        <center>
            <form method="post">
                <h3>enter the year</h3><br><br>
                <input type="number" name="year" require><br><br>
                <input type="submit" name="abc" value="submit">
            </form>

            <?php

                if(isset($_POST["abc"]))
                {
                    $year=$_POST["year"];

                    if($year % 4 == 0)
                    {
                        echo"year is leap".$year;

                    }
                    else
                    {
                        echo"year is not leap".$year;

                    }
                }
            ?>
        </center>

</body>
</html>