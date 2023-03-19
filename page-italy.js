function m(ville){
	  	let sel=document.getElementsByTagName("select")[2];
	  	if (ville=="GAIOLE IN CHIANTI") {
	  		sel.innerHTML="<option selected>OHen HOTEL Castello di Spaltenna Exclusive Resort & Spa</option>";
	  	}
		if (ville=="CALVAGESE") {
	  		sel.innerHTML="<option selected>OHen HOTEL Palazzo Arzaga Hotel, Spa & Golf Resort</option>";
	  	}
	  	if (ville=="MILANO") {
	  		sel.innerHTML="<option selected>OHen HOTEL Domina Milano Fiera MILANO</option>";
	  	}
	  	if (ville=="GIUBILIANA") {
	  		sel.innerHTML="<option selected>OHen HOTEL Eremo Della Giubiliana</option>";
	  	}
	  	if (ville=="RIBERA") {
	  		sel.innerHTML="<option selected>OHen HOTEL Verdura Resort</option>";
	  	}
	  	if (ville=="VULCANO") {
	  		sel.innerHTML="<option selected>OHen HOTEL Therasia Resort Sea and SPA</option>";
	  	}	
		}