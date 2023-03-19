function m(ville){
	  	let sel=document.getElementsByTagName("select")[2];
	  	if (ville=="MUNICH") {
	  		sel.innerHTML="<option selected>OHen HOTEL Vier Jahreszeiten Kempinski München</option>";
	  	}
		if (ville=="LEBBIN") {
	  		sel.innerHTML="<option selected>OHen HOTEL SCHLOSS Fleesensee</option>";
	  	}
	  	if (ville=="HOMBURG") {
	  		sel.innerHTML="<option selected>OHen HOTEL Steigenberger Hotel Bad Homburg</option>";
	  	}
	  	if (ville=="HELIGENDAMM") {
	  		sel.innerHTML="<option selected>OHen HOTEL Grand Hotel Heiligendamm</option>";
	  	}
	  	if (ville=="GAGER") {
	  		sel.innerHTML="<option selected>OHen HOTEL mönchgut living & spa</option>";
	  	}
	  	if (ville=="HANOVER") {
	  		sel.innerHTML="<option selected>OHen HOTEL Kastens Hotel Luisenhof</option>";
	  	}	
		}