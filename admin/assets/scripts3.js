$('input').each(function() {
	if($(this).val() == "1.00") {
		//alert("test");
		$(this).attr({"readonly" : "false"});
	}
});



document.getElementById("select_currency1").onchange=function() {
	change_currency.submit();

}



