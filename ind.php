		
		<!--function m(pays){
	  	let selville=document.getElementsByTagName("select")[1];
	  	let selhotel=document.getElementsByTagName("select")[2];
	  	if (pays=="Maroc") {
	  		selville.innerHTML="<option selected>TANGER</option><option>MARRAKECH</option> <option>RABAT </option><option>AGADIR</option><option>FES  </option> <option>IFRANE</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL TANGER CITY CENTER </option>";
	  	}
		if (pays=="France") {
	  		selville.innerHTML="<option selected>PARIS</option><option >LYON</option><option >LILLE</option><option >BORDEAUX</option><option >MARSEILLE</option><option >TOULOUSE</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL CITADINES DIDOT</option>";
	  	}
	  	if (pays=="Algerie") {
	  		selville.innerHTML="<option selected>ALGER</option><option >ZERALDA</option><option >ORAN</option><option >CONSTANTINE</option><option >CHERAGA</option><option >ALGE</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL Oasis Hotel Alger</option>";
	  	}
	  	if (pays=="Spain") {
	  		selville.innerHTML="<option selected>MADRID</option><option>OLIVA</option><option>LOS CRISTIANOS</option><option >BARCELONE</option><option >MARBILLA</option><option >GRENADE</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL MADRID </option>";
	  	}
	  	if (pays=="Germany") {
	  		selville.innerHTML="<option selected>MUNICH</option><option >LEBBIN</option><option >HOMBURG</option><option>HELIGENDAMM</option><option >GAGER</option><option >HANOVER</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL Vier Jahreszeiten Kempinski München </option>";
	  	}
	  	if (pays=="Italy") {
	  		selville.innerHTML="<option >GAIOLE IN CHIANTI</option><option >CALVAGESE</option><option selected>MILANO</option><option >GIUBILIANA</option><option >RIBERA</option><option >VULCANO</option>";
	  		selhotel.innerHTML="<option>OHen HOTEL Domina Milano Fiera MILANO </option>";
	  	}	
		}
		function b(ville){
			let selpays=document.getElementsByTagName("select")[0].value;
			let selhotel=document.getElementsByTagName("select")[2];
			if(selpays=="Maroc"){
				if(ville=="TANGER"){
					selhotel.innerHTML="<option>OHen HOTEL TANGER CITY CENTER </option>";
				}
				if(ville=="MARRAKECH"){
					selhotel.innerHTML="<option> OHen HOTEL CHEMSIYA MARRACKECH</option>";
				}
				if(ville=="RABAT"){
					selhotel.innerHTML="<option>OHen HOTEL RIAD RABAT </option>";
				}
				if(ville=="AGADIR"){
					selhotel.innerHTML="<option>OHen HOTEL ATLANTIC AGADIR </option>";
				}
				if(ville=="FES"){
					selhotel.innerHTML="<option>OHen HOTEL NOUZHA FES </option>";
				}
				if(ville=="IFRANE"){
					selhotel.innerHTML="<option>OHen HOTEL RAS EL MAA IFRANE </option>";
				}
			}
			if(selpays=="France"){
				if(ville=="PARIS"){
					selhotel.innerHTML="<option> OHen HOTEL CITADINES DIDOT</option>";
				}
				if(ville=="LYON"){
					selhotel.innerHTML="<option>OHen HOTEL TERMINUS LYON </option>";
				}
				if(ville=="LILLE"){
					selhotel.innerHTML="<option>OHen HOTEL ODALYS LILLE </option>";
				}
				if(ville=="BORDEAUX"){
					selhotel.innerHTML="<option>OHen HOTEL OPERA BORDEAUX </option>";
				}
				if(ville=="MARSEILLE"){
					selhotel.innerHTML="<option>OHen HOTEL NOVOTEL MARSEILLE </option>";
				}
				if(ville=="TOULOUSE"){
					selhotel.innerHTML="<option>OHen HOTEL CAMPANILE TOULOUSE </option>";
				}
			}
			if(selpays=="Spain"){
				if(ville=="OLIVA"){
					selhotel.innerHTML="<option>OHen HOTEL CITADINES OLIVA </option>";
				}
				if(ville=="LOSCRISTIANOS"){
					selhotel.innerHTML="<option>OHen HOTEL LOS CRISTIANOS SOL ARONA </option>";
				}
				if(ville=="BARCELONE"){
					selhotel.innerHTML="<option>OHen HOTEL BARCELONE </option>";
				}
				if(ville=="MARBILLA"){
					selhotel.innerHTML="<option>OHen HOTEL MARBILLA </option>";
				}
				if(ville=="GRENADE"){
					selhotel.innerHTML="<option>OHen HOTEL GRENADE </option>";
				}
				if(ville=="MADRID"){
					selhotel.innerHTML="<option>OHen HOTEL MADRID </option>";
				}
			}
			if(selpays=="Algerie"){
				if(ville=="ALGER"){
					selhotel.innerHTML="<option>OHen HOTEL Oasis Hotel Alger </option>";
				}
				if(ville=="ZERALDA"){
					selhotel.innerHTML="<option>OHen HOTEL AZ Hotel Zeralda </option>";
				}
				if(ville=="ORAN"){
					selhotel.innerHTML="<option>OHen HOTEL BACHA Oran </option>";
				}
				if(ville=="CONSTANTINE"){
					selhotel.innerHTML="<option>OHen HOTEL Constantine Marriott Hotel </option>";
				}
				if(ville=="CHERAGA"){
					selhotel.innerHTML="<option>OHen HOTEL Hôtel Madaure Cheraga </option>";
				}
				if(ville=="ALGE"){
					selhotel.innerHTML="<option>OHen HOTEL Suisse Algé </option>";
				}
			}
			if(selpays=="Germany"){
				if(ville=="MUNICH"){
					selhotel.innerHTML="<option>OHen HOTEL Vier Jahreszeiten Kempinski München </option>";
				}
				if(ville=="LEBBIN"){
					selhotel.innerHTML="<option>OHen HOTEL SCHLOSS Fleesensee </option>";
				}
				if(ville=="HOMBURG"){
					selhotel.innerHTML="<option>OHen HOTEL Steigenberger Hotel Bad Homburg </option>";
				}
				if(ville=="HELIGENDAMM"){
					selhotel.innerHTML="<option>OHen HOTEL Grand Hotel Heiligendamm </option>";
				}
				if(ville=="GAGER"){
					selhotel.innerHTML="<option>OHen HOTEL mönchgut living & spa </option>";
				}
				if(ville=="HANOVER"){
					selhotel.innerHTML="<option>OHen HOTEL Kastens Hotel Luisenhof </option>";
				}
			}
			if(selpays=="Italy"){
				if(ville=="GAIOLE IN CHIANTI"){
					selhotel.innerHTML="<option>OHen HOTEL Castello di Spaltenna Exclusive Resort & Spa </option>";
				}
				if(ville=="CALVAGESE"){
					selhotel.innerHTML="<option>OHen HOTEL Palazzo Arzaga Hotel, Spa & Golf Resort </option>";
				}
				if(ville=="MILANO"){
					selhotel.innerHTML="<option>OHen HOTEL Domina Milano Fiera MILANO </option>";
				}
				if(ville=="GIUBILIANA"){
					selhotel.innerHTML="<option>OHen HOTEL Eremo Della Giubiliana </option>";
				}
				if(ville=="RIBERA"){
					selhotel.innerHTML="<option>OHen HOTEL Verdura Resort </option>";
				}
				if(ville=="VULCANO"){
					selhotel.innerHTML="<option>OHen HOTEL Therasia Resort Sea and SPA </option>";
				}
			}

		}*/
