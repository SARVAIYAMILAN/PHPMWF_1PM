<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <center>
        <form method="post">
            <h3>enter the physics marks</h3>
            <input type="number" name="ph" required><br>
            <h3>enter the chemistry marks</h3>
            <input type="number" name="ch" required><br>
            <h3>enter the biology marks</h3>
            <input type="number" name="bi" required><br>
            <h3>enter the math marks</h3>
            <input type="number" name="ma" required><br>
            <h3>enter the computer marks</h3>
            <input type="number" name="co" required><br><br>
            <input type="submit" name="sub" value="submit"><br><br>

        </form>

        <?php
        if(isset($_POST["sub"]))
        {
            $ph=$_POST["ph"];
            $ch=$_POST["ch"];
            $bi=$_POST["bi"];
            $ma=$_POST["ma"];
            $co=$_POST["co"];
            $total;
            $perchtange;
            $average;
            $grade;

            
            $total = $ph+$ch+$bi+$ma+$co;
            $average = $total/5;
            $perchtange = ($total/500) *100;

            if($average >= 90)
            {
                $grade = "A";
            }
            elseif($average >= 80 && $average < 90)
            {
                $grade = "B";
            }
            elseif($average >= 70 && $average < 80)
            {
                $grade = "C";
            }
            elseif($average >= 60 && $average < 70)
            {
                $grade = "D";
            }
            else
            {
                $grade = "E";
            }

            echo "The Percentage    = " . $perchtange . "%<br>";
            echo "The grade is     = " . $grade . "\n";

            



        }


        ?>

    </center>
    
</body>
</html>