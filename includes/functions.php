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





	function countMass($data) {
		
		#if not empty, collect masses...
		if(!empty($data['monday'])){
			$mondaymasses = $data['monday'];
			$countMonday = count($mondaymasses);
		} else {
			$countMonday = 0;
		}

		if(!empty($data['tuesday'])){
			$tuesdaymasses = $data['tuesday'];
			$countTuesday = count($tuesdaymasses);
		} else {
			$countTuesday = 0;
		}
		
		if(!empty($data['wednesday'])){
			$wednesdaymasses = $data['wednesday'];	
			$countWednesday = count($wednesdaymasses);
		} else {
			$countWednesday = 0;
		}
		
		if(!empty($data['thursday'])){
			$thursdaymasses = $data['thursday'];
			$countThursday = count($thursdaymasses);
		} else {
			$countThursday = 0;
		}

		if(!empty($data['friday'])){
			$fridaymasses = $data['friday'];	
			$countFriday = count($fridaymasses);
		} else {
			$countFriday = 0;
		}

		if(!empty($data['saturday'])){
			$saturdaymasses = $data['saturday'];
			$countSaturday = count($saturdaymasses);
		} else {
			$countSaturday = 0;
		}

		if(!empty($data['sunday'])){
			$sundaymasses = $data['sunday'];	
			$countSunday = count($sundaymasses);
		}else {
			$countSunday = 0;
		}

		return [$countMonday,$countTuesday,$countWednesday,
			 	$countThursday,$countFriday,$countSaturday,$countSunday];
	}


	function massWeekly($countMass) {
		
		#if set, count masses...
		$massWeekly = 0;
		if(isset($countMass[0])) 
			$massWeekly += $countMass[0];
		

		if(isset($countMass[1])) 
			$massWeekly += $countMass[1];
		

		if(isset($countMass[2])) 
			$massWeekly += $countMass[2];
		

		if(isset($countMass[3])) 
			$massWeekly += $countMass[3];
		

		if(isset($countMass[4])) 
			$massWeekly += $countMass[4];
		

		if(isset($countMass[5])) 
			$massWeekly += $countMass[5];
		

		if(isset($countMass[6])) 
			$massWeekly += $countMass[6];
		

		return $massWeekly;
	}


	function durationInDays($data) {

		$startdate = date_create($data['startdate']);
		
		$enddate = date_create($data['enddate']);

		$datediff = date_diff($startdate,$enddate);

		$durationInDays = $datediff -> format("%a");

		return $durationInDays;

	}

	function numberOfWeeksAndDays($numdays) {
		$days = $numdays%7;
		$weeks = floor($numdays/7);

		return [$weeks, $days];
	}

	
	function getStartDayOfWeek($data) {
		
		$startDate = $data['startdate'];

		$timeStamp = strtotime($startDate);

		$dayOfWeek = date("l", $timeStamp);

		return $dayOfWeek;

	}


	function extraMassCount($dayOfWeek, $extraDays, $countMass) {

		$daysOfTheWeek = [
							'monday','tuesday','wednesday','thursday','friday','saturday','sunday',
							'monday','tuesday','wednesday','thursday','friday','saturday','sunday'
						 ];
		$massCountForExtraDays = 0;	

		for ($i = $extraDays; $i > 0; $i--) { 		

			if($daysOfTheWeek[$i]=='monday')
				$massCountForExtraDays += $countMass[0];

			if($daysOfTheWeek[$i]=='tuesday')
				$massCountForExtraDays += $countMass[1];

			if($daysOfTheWeek[$i]=='wednesday')
				$massCountForExtraDays += $countMass[2];

			if($daysOfTheWeek[$i]=='thursday')
				$massCountForExtraDays += $countMass[3];

			if($daysOfTheWeek[$i]=='friday')
				$massCountForExtraDays += $countMass[4];
			
			if($daysOfTheWeek[$i]=='saturday')
				$massCountForExtraDays += $countMass[5];

			if($daysOfTheWeek[$i]=='sunday')
				$massCountForExtraDays += $countMass[6];

		}

		return $massCountForExtraDays;

	}


	function calculateAmount($totNumMasses,$numberOfWeeks, $extraMassCount) {
		
		$amount = $totNumMasses * $numberOfWeeks * 100;

		$amount = $amount + ($extraMassCount*100);

		return $amount;

	}