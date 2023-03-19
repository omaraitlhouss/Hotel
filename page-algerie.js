function m(ville){
	  	let sel=document.getElementsByTagName("select")[2];
	  	if (ville=="ALGER") {
	  		sel.innerHTML="<option selected>OHen HOTEL Oasis Hotel Alger</option>";
	  	}
		if (ville=="ZERALDA") {
	  		sel.innerHTML="<option selected>OHen HOTEL AZ Hotel Zeralda</option>";
	  	}
	  	if (ville=="ORAN") {
	  		sel.innerHTML="<option selected>OHen HOTEL BACHA Oran</option>";
	  	}
	  	if (ville=="CONSTANTINE") {
	  		sel.innerHTML="<option selected>OHen HOTEL Constantine Marriott Hotel</option>";
	  	}
	  	if (ville=="CHERAGA") {
	  		sel.innerHTML="<option selected>OHen HOTEL Hôtel Madaure Cheraga</option>";
	  	}
	  	if (ville=="ALGE") {
	  		sel.innerHTML="<option selected>OHen HOTEL Suisse Algé</option>";
	  	}	
		}