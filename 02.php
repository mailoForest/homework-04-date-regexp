<?php
	function set($name){
		return isset($_POST[$name]) ? $_POST[$name] : 0;
	}
	
	$month = set('month');
	$day = set('day');
	$year = set('year');
	$hour = set('hour');
	$min = set('min');
	$sec = set('sec');
	
	if (!intval($month)){
		$month = date('n',strtotime($month));
	}
	
	$addYears = set('addYears');
	$addMonths = set('addMonths');
	$addDays = set('addDays');
	$addHours = set('addHours');
	$addMin = set('addMin');
	$addSec = set('addSec');
	
	$ts = mktime( $hour + $addHours, $min + $addMin, $sec + $addSec, $month + $addMonths, $day + $addDays, $year + $addYears);
	
	$format = set('format');
	$result = date($format, $ts); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>02</title>
		<style>
		input, output{
			font-size: 1.3em;
		}
		output {
			width: 12em;
			height: 1.4em;	
			border: 1px solid black;
			display: inline-block;
		}
		</style>
	</head>
	<body>
		<form action="" method="post">
		<div>
			<input type="text" placeholder="year" name="year" value=<?= $year + $addYears?> />
			<input type="text" placeholder="month" name="month" value=<?= $month + $addMonths?> />
			<input type="text" placeholder="day" name="day" value=<?= $day + $addDays?> />
			<input type="text" placeholder="hour" name="hour" value=<?= $hour + $addHours?> />
			<input type="text" placeholder="minutes" name="min" value=<?= $min + $addMin?> />
			<input type="text" placeholder="seconds" name="sec" value=<?= $sec + $addSec?> />	
		</div>
		<div>
			<input type="number" placeholder="add years" name="addYears"/>
			<input type="number" placeholder="add months" name="addMonths"/>
			<input type="number" placeholder="add days" name="addDays"/>
			<input type="number" placeholder="add hours" name="addHours"/>
			<input type="number" placeholder="add minutes" name="addMin"/>
			<input type="number" placeholder="add seconds" name="addSec"/>
		</div>
		<div><input type="text" placeholder="format" name="format"/></div>
		<div>
			<output>
				<?php 
					if (empty($result)){
						echo "Don't forget the format!";
					} else {
						echo $result;
					}
				?>
			</output> The date you wish to see must be after date: 1901.12.13 and time: 21:45:52.
		</div>
		<button type="submit">Submit</button>
		</form>
	</body>
</html>