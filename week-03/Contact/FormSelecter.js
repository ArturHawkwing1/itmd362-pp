/*Decides what div elements to show based on what option from the drop down menu is selected.*/
function OnChange(Reason) {
	if (Reason=="Computer_Repair" || Reason=="Computer_Tune_Up") {
		document.getElementById("PickupPerson").style.display="block";
	} else {
		document.getElementById("PickupPerson").style.display="none";
	}
	
	if (Reason=="Network_Consulting" || Reason=="Computer_Consulting" || Reason=="Network_Setup" || Reason=="Network_Maintance") {
		document.getElementById("Availability").style.display="block";
	} else {
		document.getElementById("Availability").style.display="none";
	}
	
	if (Reason=="Computer_Repair" || Reason=="Network_Maintance") {
		document.getElementById("Comments").style.display="block";
	} else {
		document.getElementById("Comments").style.display="none";
	}
	
	if (Reason=="Computer_Consulting" || Reason=="Network_Consulting") {
		document.getElementById("Consulting").style.display="block";
	} else {
		document.getElementById("Consulting").style.display="none";
	}
}