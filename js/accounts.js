function ValidateUser(form) {
	var username = form.username.value;
	var password = form.password.value;
	if(ValidateString(username) && ValidateString(password)) {
		return true;
	}
	return false;
}
		
function ValidateStaff(form) {
	if(ValidateUser(form)) {
		return true;
	}
	alert("One or more fields seem to be invalid. Please try again.");
	return false;
}
		
function ValidateCustomer(form) {
	var firstname = form.firstname.value;
	var lastname = form.lastname.value;
	var address = form.address.value;
	var phoneno = form.phoneno.value;
	var email = form.email.value;
	if(ValidateUser(form) && ValidateString(firstname) && ValidateString(lastname) && ValidateString(address) && ValidatePhoneNo(phoneno) && ValidateEmail(email)) {
		return true;
	}
	alert("One or more fields seem to be invalid. Please try again.");
	return false;
			
}
		
function ValidateString(field) {
	return(!(field == ""));
}
		
function ValidatePhoneNo(phoneno) {
	if(Number.isInteger(parseInt(phoneno))) {
		return true;
	}
	return false;
}
		
function ValidateEmail(email) {
	//regular expression to match email format
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email.match(re)) {
		return true;
	}
	return false;
}