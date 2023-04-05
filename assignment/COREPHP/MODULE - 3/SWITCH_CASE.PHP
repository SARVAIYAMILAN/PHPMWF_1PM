
<!DOCTYPE html>
<html>
<head>
	<title>Find Day of Week using Switch</title>
</head>
<body>
	<form method="post" action="">
		<label for="day">Enter a day of the week:</label>
		<input type="text" id="day" name="day" required>
		<button type="submit" name="submit">Submit</button>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$day = $_POST['day'];

		switch ($day) {
			case 'Monday':
				echo "The day is Monday.";
				break;
			case 'Tuesday':
				echo "The day is Tuesday.";
				break;
			case 'Wednesday':
				echo "The day is Wednesday.";
				break;
			case 'Thursday':
				echo "The day is Thursday.";
				break;
			case 'Friday':
				echo "The day is Friday.";
				break;
			case 'Saturday':
				echo "The day is Saturday.";
				break;
			case 'Sunday':
				echo "The day is Sunday.";
				break;
			default:
				echo "Invalid day entered.";
				break;
		}
	}
	?>
</body>
</html>
