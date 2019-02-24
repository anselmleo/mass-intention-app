<?php

	function insertToIntention($dbconn, $data) {
		
		$isDataInserted = false;
		
		$extracted = extract($data);

		$intention = mysqli_escape_string($dbconn, $intention);
		
		$query = "INSERT INTO `intention`
				 (`intention`,`open`,`startdate`,`enddate`)
				 VALUES('$intention','$open','$startdate','$enddate')";

		$go = mysqli_query($dbconn, $query) or die(mysqli_error($dbconn));

		if(mysqli_affected_rows($dbconn)>0) {
			$isDataInserted = true;
		}
			return $isDataInserted; 
	}





	function collectMassesAndCount($data) {

		#if not empty, collect masses...
		if(!empty($data['monday'])){
			$mondaymasses = $data['monday'];
			$countMonday = count($mondaymasses);
			echo "Monday: " . $countMonday;	
		}

		if(!empty($data['tuesday'])){
			$tuesdaymasses = $data['tuesday'];
			$countTuesday = count($tuesdaymasses);
			echo "Tuesday: " . $countTuesday;
		}
		
		if(!empty($data['wednesday'])){
			$wednesdaymasses = $data['wednesday'];	
			$countWednesday = count($wednesdaymasses);
			echo "Wednesday: " . $countWednesday;
		}
		
		if(!empty($data['thursday'])){
			$thursdaymasses = $data['thursday'];
			$countThursday = count($thursdaymasses);
			echo "Thursday: " . $countThursday;	
		}

		if(!empty($data['friday'])){
			$fridaymasses = $data['friday'];	
			$countFriday = count($fridaymasses);
			echo "Friday: " . $countFriday;
		}

		if(!empty($data['saturday'])){
			$saturdaymasses = $data['saturday'];
			$countSaturday = count($saturdaymasses);
			echo "Saturday: " . $countSaturday;	
		}

		if(!empty($data['sunday'])){
			$sundaymasses = $data['sunday'];	
			$countSunday = count($sundaymasses);
			echo "Sunday: " . $countSunday;
		}


	
		#if set count masses...
		$massTotal = 0;
		if(isset($countMonday)) {
			$massTotal += $countMonday;
		}

		if(isset($countTuesday)) {
			$massTotal += $countTuesday;
		}

		if(isset($countWednesday)) {
			$massTotal += $countWednesday;
		}

		if(isset($countThursday)) {
			$massTotal += $countThursday;
		}

		if(isset($countFriday)) {
			$massTotal += $countFriday;
		}

		if(isset($countSaturday)) {
			$massTotal += $countSaturday;
		}

		if(isset($countSunday)) {
			$massTotal += $countSunday;
		}

		return $massTotal;
	}


	function numberofDays($data) {

		$startdate = date_create($data['startdate']);
		$enddate = date_create($data['enddate']);

		$datediff = date_diff($startdate,$enddate);

		$numberOfDays = $datediff -> format("%a");

		return $numberOfDays;

	}

	function numberOfWeeks($numdays) {
		$days = $numdays%7;
		$weeks = floor($numdays/7);

		return [$weeks, $days];
	}

	function calculateAmount($totNumMasses,$numberOfWeeks) {
		$amount = $totNumMasses * $numberOfWeeks * 100;
		return $amount;
	}


