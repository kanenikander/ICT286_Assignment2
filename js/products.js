
function ValidateItem(form) {
	type = form.type.value;
	style = form.style.value;
	material = form.material.value;
	wrap = form.wrap.value;
	colour = form.colour.value;
	build = form.build.value;
	price = form.price.value;
	stock = form.stock.value;
	description = form.description.value;
	
	if(ValidateString(type) && ValidateString(style) && ValidateString(material) && ValidateString(wrap) && ValidateString(colour) && ValidateString(build) && ValidateInt(stock) && ValidateInt(price) && ValidateString(description)) {
		return true;
	}
	alert("One or more fields seem to be invalid. Please try again.");
	return false;
}
		
function ValidateString(field) {
	return(!(field == ""));
}
		
function ValidateInt(num) {
	if(Number.isInteger(parseInt(num))) {
		if(!(parseInt(num) < 0)) {
			return true;
		}
	}	
	return false;
}
		
function ValidateFloat(num) {
	if(Number.isFloat(parseFloat(num))) {
		if(!(num < 0)) {
			return true;
		}
	}
	return false;
}