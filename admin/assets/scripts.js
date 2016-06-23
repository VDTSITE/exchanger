window.onload=function() {


	//////////////////////////////////////
	var checked_title_slider = false;


	document.getElementById("title_slider").onblur=function() {
		checked_title_slider = title_correct_slider();
	}


	document.getElementById("add_slide").onclick=function() {
		send_slider(checked_title_slider);
	}


	//////////////////////////////////////////////

	var checked_title_news = false;
	var checked_desc_news = false;


	document.getElementById("title_news").onblur=function() {
		alert("nisha");
		checked_title_news = title_correct_news();
	}

	document.getElementById("desc_news").onblur=function() {
		alert("nisha1");
		checked_desc_news = desc_correct_news();
	}

	document.getElementById("add_news").onclick=function() {
		alert("nisha2");
		send_news(checked_title_news, checked_desc_news);
	}
}


//////////////////////////////////////

function title_correct_slider() {
	/*alert("pou");*/

	document.getElementById("title_slider").innerHTML="";
	var title_title_slider = document.getElementById("title_slider").value;
	var regExp_title_slider = /[a-zA-Zа-яА-Я0-9-_"'\/@.\s,]{2,500}/i;
	if(document.getElementById("title_slider").value == "") {
		/*alert("test1");*/
		document.getElementById("title_slider_error").innerHTML="";
		return false;
	}

	if(title_title_slider.match(regExp_title_slider) == null) {
		/*alert("test2");*/
		document.getElementById("title_slider_error").innerHTML="Введите текст от 2 до 255 символов";
		return false;
	}

	else {
		/*alert("test3");*/
		return true;
	}
}



function title_correct_news() {
	/*alert("pou");*/

	document.getElementById("title_news").innerHTML="";
	var title_title_news = document.getElementById("title_news").value;
	var regExp_title_news = /[a-zA-Zа-яА-Я0-9-_"'\/@.\s,]{2,500}/i;
	if(document.getElementById("title_news").value == "") {
		/*alert("test1");*/
		document.getElementById("title_news_error").innerHTML="";
		return false;
	}

	if(title_title_news.match(regExp_title_news) == null) {
		/*alert("test2");*/
		document.getElementById("title_news_error").innerHTML="Введите текст от 2 до 255 символов";
		return false;
	}

	else {
		/*alert("test3");*/
		return true;
	}
}


function desc_correct_news() {
	/*alert("pou");*/

	document.getElementById("desc_news").innerHTML="";
	var desc_desc_news = document.getElementById("desc_news").value;
	var regExp_desc_news = /[a-zA-Zа-яА-Я0-9-_"'\/@.\s,]{2,500}/i;
	if(document.getElementById("desc_news").value == "") {
		/*alert("test1");*/
		document.getElementById("desc_news_error").innerHTML="";
		return false;
	}

	if(desc_desc_news.match(regExp_desc_news) == null) {
		/*alert("test2");*/
		document.getElementById("desc_news_error").innerHTML="Введите текст от 2 до 255 символов";
		return false;
	}

	else {
		/*alert("test3");*/
		return true;
	}
}



//////////////////////////////////////

function send_slider(checked_title_slider) {
	/*alert("test1");*/
	if(checked_title_slider) {
		/*alert("2");*/
		form_slider.submit();
	}

	else {
		/*alert("3");*/
		document.getElementById("send_slider_error").innerHTML="Незаполнены обязательные поля";
	}
}




function send_news(checked_title_news, checked_desc_news) {
	/*alert("test1");*/
	if(checked_title_news && checked_desc_news) {
		/*alert("2");*/
		form_news.submit();
	}

	else {
		/*alert("3");*/
		document.getElementById("send_news_error").innerHTML="Незаполнены обязательные поля";
	}
}

////////////////////////////////////////