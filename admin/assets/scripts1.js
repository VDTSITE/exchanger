window.onload=function() {




	//////////////////////////////////////////////

	var checked_title_news = false;
	var checked_desc_news = false;


	document.getElementById("title_news").onblur=function() {
		
		checked_title_news = title_correct_news();
	}

	document.getElementById("desc_news").onblur=function() {
		
		checked_desc_news = desc_correct_news();
	}

	document.getElementById("add_news").onclick=function() {
		
		send_news(checked_title_news, checked_desc_news);
	}
}


//////////////////////////////////////




function title_correct_news() {
	/*alert("pou");*/

	document.getElementById("title_news_error").innerHTML="";
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

	document.getElementById("desc_news_error").innerHTML="";
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