function m(ville){
	  	let sel=document.getElementsByTagName("select")[2];
	  	if (ville=="PARIS") {
	  		sel.innerHTML="<option selected>OHen HOTEL CITADINES DIDOT</option>";
	  	}
		if (ville=="LYON") {
	  		sel.innerHTML="<option selected>OHen HOTEL TERMINUS LYON</option>";
	  	}
	  	if (ville=="LILLE") {
	  		sel.innerHTML="<option selected>OHen HOTEL ODALYS LILLE</option>";
	  	}
	  	if (ville=="BORDEAUX") {
	  		sel.innerHTML="<option selected>OHen HOTEL OPERA BORDEAUX</option>";
	  	}
	  	if (ville=="MARSEILLE") {
	  		sel.innerHTML="<option selected>OHen HOTEL NOVOTEL MARSEILLE</option>";
	  	}
	  	if (ville=="TOULOUSE") {
	  		sel.innerHTML="<option selected>OHen HOTEL CAMPANILE TOULOUSE</option>";
	  	}	
		}