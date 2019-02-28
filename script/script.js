

	document.getElementById("checkall").onclick = function() {
	  
	  	//alert('go away!');
		var md = document.getElementsByClassName("md");
		//alert('i got here');

		for (var i = md.length-1; i >= 0; i--) {

			if(md[i].checked) {
				md[i].click();
			} else {
				md[i].click();
			}
		}

	}


	document.getElementById("enddate").onblur = function() {
	
		var startDate = document.getElementById("startdate").value;

		var endDate = document.getElementById("enddate").value;

		var startDateToTime = new Date(startDate).getTime();

		var endDateToTime = new Date(endDate).getTime();

		if((startDateToTime-endDateToTime)>0) {

			document.getElementById("startdate").value = "";
			
			document.getElementById("enddate").value = "";
			
			document.getElementById("dateerror").innerHTML = "Error: End date cannot be before start date";
			
			alert("Your end date must be later than your start date!");
		}

	}

	document.getElementById("startdate").onfocus = function() {
		document.getElementById("dateerror").innerHTML = "";
	}