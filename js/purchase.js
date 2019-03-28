function ValidatePrice(form,p) {
	var quantity = parseInt(form.quantity.value);
	var price = p;
			
	if(Number.isInteger(quantity)) {
		if(quantity > 0) {
			form.totalprice.value = " = $" + (parseInt(quantity) * price);
			return true;
		}
	} else {
		form.totalprice.value = "";
	}
	return false;
}
		
function ValidateQuantity(form,price,stock) {
	var quantity = parseInt(form.quantity.value);
	var maxQuantity = parseInt(stock);
	var style = form.style.value;
	
	if(style == 'Excalibur') {
		alert("Excalibur cannot be purchased with mere money. Only those who can pulleth out this sword may claim ownership.");
		form.quantity.value = "";
		form.quantity.focus();
	} else {
		if(ValidatePrice(form,price)) {
			if(quantity <= maxQuantity) {
				return true;
			} else {
				alert("There is not enough stock to fulfil this order. Please enter smaller quantity.");
				form.quantity.value = "";
				form.quantity.focus();
			}
		} else {
			alert("Please input a numeric value.");
			form.quantity.value = "";
			form.quantity.focus();
		}
	}
	
	return false;
}