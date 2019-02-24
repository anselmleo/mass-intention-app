<?php
	
	$title = "Home";
	include "includes/db.php";
	include "includes/functions.php";
	include "includes/header.php";
	include "views/dashboard.php";

	if(array_key_exists('submit', $_POST)) {

		print_r($_POST);

		$massTotal = collectMassesAndCount($_POST);

		if($massTotal>0)
			echo "<h1>Total Number of Masses: " . $massTotal . "</h1>";

		#split POST array...
		$collectIntentionData = array_splice($_POST, 0, 6);

		$_trimmed = array_map('trim', $collectIntentionData);

		$insert = insertToIntention($conn, $_trimmed);

		if($insert)
			echo '<br><p class="success">Data entered successfully!</p>';

		$numberOfDays = numberOfDays($_trimmed);

		$numWeeksAndDays = numberOfWeeks($numberOfDays);

		$amount = calculateAmount($massTotal, $numWeeksAndDays[0]);

		echo "<h1> Your intention for " . $numberOfDays . " days is NGN" . $amount . " only.</h1>";

		echo 	"<h3>Your intention is going to run for " . $numWeeksAndDays[0] . "week(s) " . 
				$numWeeksAndDays[1] . "days ";

	}

		
	include "includes/footer.php";

