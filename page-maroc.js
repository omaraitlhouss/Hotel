function m(ville){
	  	let sel=document.getElementsByTagName("select")[2];
	  	if (ville=="TANGER") {
	  		sel.innerHTML="<option selected>OHen HOTEL TANGER CITY CENTER</option>";
	  	}
		if (ville=="MARRAKECH") {
	  		sel.innerHTML="<option selected>OHen HOTEL CHEMSIYA MARRACKECH</option>";
	  	}
	  	if (ville=="RABAT") {
	  		sel.innerHTML="<option selected>OHen HOTEL RIAD RABAT</option>";
	  	}
	  	if (ville=="AGADIR") {
	  		sel.innerHTML="<option selected>OHen HOTEL ATLANTIC AGADIR</option>";
	  	}
	  	if (ville=="FES") {
	  		sel.innerHTML="<option selected>OHen HOTEL NOUZHA FES</option>";
	  	}
	  	if (ville=="IFRANE") {
	  		sel.innerHTML="<option selected>OHen HOTEL RAS EL MAA IFRANE</option>";
	  	}	
		}