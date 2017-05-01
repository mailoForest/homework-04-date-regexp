<?php

	$month = isset($_POST['month']) ? $_POST['month'] : 0;
	$day = isset($_POST['day']) ? $_POST['day'] : 0;
	$year = isset($_POST['year']) ? $_POST['year'] : 0;
	$ts = mktime(0,0,0, $month, $day, $year);
	$date = date('n', $ts);
	
	if ($month > 12 || $month < 1) {
		echo "<p>invalid month</p>";
	}
	if ($date != $month){
		echo "<h3>invalid date</h3><p>did you mean " . date('n:d:Y', $ts) . "?</p>";
	} else {
		echo "the date is valid";
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>01</title>
	</head>
	<body>
		<form action="" method="post">
			<div><label for="">Month:</label></div>
			<div><input type="text" name="month"/></div>
			<div><label for="">Day:</label></div>
			<div><input type="text" name="day"/></div>
			<div><label for="">Year:</label></div>
			<div><input type="text" name="year"/></div>
			<button>submit</button>
		</form>
	</body>
</html>