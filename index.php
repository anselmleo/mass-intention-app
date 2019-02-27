<?php
	
	$title = "Home";
	include "includes/db.php";
	include "includes/functions.php";
	include "includes/header.php";
	include "views/dashboard.php";

	if(array_key_exists('submit', $_POST)) {

		print_r($_POST);

		$countMass = countMass($_POST);

		$massWeekly = massWeekly($countMass);

		if($massWeekly>0)
			echo "<h1>Total Number of Masses: " . $massWeekly . "</h1>";

		#split POST array...
		$collectIntentionData = array_splice($_POST, 0, 6);

		$_trimmed = array_map('trim', $collectIntentionData);

		$insert = insertToIntention($conn, $_trimmed);

		if($insert)
			echo '<br><p class="success">Data entered successfully!</p>';

		$durationInDays = durationInDays($_trimmed);

		$numWeeksAndDays = numberOfWeeksAndDays($durationInDays);

		echo 	"<h3>Your intention is going to run for " . $numWeeksAndDays[0] . "week(s) " . 
				$numWeeksAndDays[1] . "days ";

		$dayOfWeek = getStartDayOfWeek($_trimmed);

		echo "<h4> Day of the Week: " . $dayOfWeek . "</h4>";

		$extraMassCount = extraMassCount($dayOfWeek, $numWeeksAndDays[1], $countMass);

		$amount = calculateAmount($massWeekly, $numWeeksAndDays[0], $extraMassCount);

		echo "<h1> Your intention for " . $durationInDays . " days is NGN" . $amount . " only.</h1>";

		echo "<h1> Number of masses for the extra days are: " . $extraMassCount . "</h1>";

		

	}

		
	include "includes/footer.php";

