window.onload=function() {
//alert("test");

	var checked_tel = false;
	var checked_last_name = false;
	var checked_first_name = false;

	document.getElementById('tel1').onfocus=function() {
		//alert("okda");
		document.getElementById("error_tel1").innerHTML="";
	};

	document.getElementById('tel1').onblur=function() {
		checked_tel = tel_correct();
	};



	document.getElementById('last_name1').onfocus=function() {
		//alert("okda");
		document.getElementById("error_last_name1").innerHTML="";
	};

	document.getElementById('last_name1').onblur=function() {
		checked_last_name = last_name_correct();
	};



	document.getElementById('first_name1').onfocus=function() {
		//alert("okda");
		document.getElementById("error_first_name1").innerHTML="";
	};

	document.getElementById('first_name1').onblur=function() {
		checked_first_name = first_name_correct();
	};



	document.getElementById('send1').onclick=function() {
		if(document.getElementById("rules1").checked) {
			mySend(checked_tel, checked_last_name, checked_first_name);
		}

		else {
			alert("Ознакомьтесь с правилами и условиями использования");
		}
	};

	


}


function tel_correct() {
	//alert("okdada");
	document.getElementById("error_tel1").innerHTML="";
	var tel_tel = document.getElementById("tel1").value;
	var regExp_tel = /^((8|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/gi;
	if(tel_tel == "") {
		document.getElementById("error_tel1").innerHTML="";
		return false;
	}

	if(tel_tel.match(regExp_tel) == null) {
		document.getElementById("error_tel1").innerHTML="Введите телефон корректно";
		return false;
	}

	else {
		return true;
	}
}


function last_name_correct() {
	document.getElementById("error_last_name1").innerHTML="";
	var last_name_last_name = document.getElementById("last_name1").value;
	var regExp_last_name = /^[a-zA-Zа-яА-Я_-]{2,20}\s*([a-zA-Zа-яА-Я_-]{2,20}\s*)?$/gi;
	if(last_name_last_name == "") {
		document.getElementById("error_last_name1").innerHTML="";
		return false;
	}

	if(last_name_last_name.match(regExp_last_name) == null) {
		document.getElementById("error_last_name1").innerHTML="Введите фамилию корректно";
		return false;
	}

	else {
		return true;
	}
}


function first_name_correct() {
	document.getElementById("error_first_name1").innerHTML="";
	var name_name = document.getElementById("first_name1").value;
	var regExp_name = /^[a-zA-Zа-яА-Я_-]{2,20}\s*([a-zA-Zа-яА-Я_-]{2,20}\s*)?$/gi;
	if(name_name == "") {
		document.getElementById("error_first_name1").innerHTML="";
		return false;
	}

	if(name_name.match(regExp_name) == null) {
		document.getElementById("error_first_name1").innerHTML="Введите имя корректно";
		return false;
	}

	else {
		return true;
	}
}



function mySend(checked_tel, checked_last_name, checked_first_name) {
	//alert(checked_tel);
	//alert(checked_last_name);
	//alert(checked_first_name);
		if(checked_tel && checked_last_name && checked_first_name) {
			
			form_send.submit();
			alert("go");
		}

		else {
			document.getElementById("error_send1").innerHTML="Незаполнены обязательные поля";
		}

}