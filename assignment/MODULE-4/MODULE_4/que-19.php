<!-- hotel booking room -->
<center>

<?php


if(isset($_POST["su"])){ 
    $rent_per_day = 800; // hotel rent per day
    $check_in_date = $_POST['check_in_date']; // get check-in date from user input
    $check_out_date = $_POST['check_out_date']; // get check-out date from user input

    // convert date strings to timestamps and calculate the difference in days
    $diff_in_days = (strtotime($check_out_date) - strtotime($check_in_date)) / (60 * 60 * 24);

    // calculate the total rent based on the number of days
    $total_rent = $diff_in_days * $rent_per_day;

    echo "You have stayed for $diff_in_days day(s) and your total rent is Rs. $total_rent.";
}
?>

<form method="post">
        
<h3>enter chek in</h3>
<input type="datetime-local" name="check_in_date" required><br><br>
<h3>enter chek out</h3>
<input type="datetime-local" name="check_out_date" required><br><br>

<input type="submit" name="su" value="submit"> 
</form>
</center>