

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

