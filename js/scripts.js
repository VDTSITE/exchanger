jQuery(document).ready(function () {

//alert(document.getElementById("td_for_id").innerHTML);
//alert("test");
///////////////////////////////////////////////////////////////
var ta_nu_id = "";
var ta_nu_id_cashing = "";
var ta_nu_wm = "";
var ta_nu_wm_cash = "";
var komisar = 0;
var komisar_cashing = 0;

function send_dialog() {
	//var ka_ka = jQuery('#ka1').val();
	var summVvoda_ref = jQuery('#ammount_refill1').val();
	var wm_ref = ta_nu_wm;
	var oplata_ref = ta_nu_id;
	var marga_ref = komisar.toFixed(2) + " " + ta_nu_id;
	var k_oplate_ref = jQuery('#k_oplate_refill1').val();


	/*alert(summVvoda_ref);
	alert(wm_ref);
	alert(oplata_ref);
	alert(komisar + oplata_ref);
	alert(k_oplate_ref);*/
	



	jQuery.ajax({
		type: "POST",
		url: "result.php",
		data: "summVvoda_ref="+summVvoda_ref+"&wm_ref="+wm_ref+"&oplata_ref="+oplata_ref+"&marga_ref="+marga_ref+"&k_oplate_ref="+k_oplate_ref
		//data: "name=John&location=Boston",
		/*success: function(data){
	     alert( "Data Saved: " + data );
	   	}*/
		//data: {summVvoda_ref: summVvoda_ref, wm_ref: wm_ref, oplata_ref: oplata_ref, k_oplate_ref: k_oplate_ref}
	});
	//select_exchange1.submit();
	//alert("rabotajet");
	
}



function send_dialog_cash() {
	//alert("test");
	//var ka_ka = jQuery('#ka1').val();
	var summVvoda_cash = jQuery('#ammount_cashing1').val();
	var wm_cash = ta_nu_wm_cash;
	var oplata_cash = ta_nu_id_cashing;
	var marga_cash = komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
	var k_oplate_cash = jQuery('#k_oplate_cashing1').val();


	/*alert(summVvoda_cash);
	alert(wm_cash);
	alert(oplata_cash);
	alert(komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing);
	alert(k_oplate_cash);*/
	



	jQuery.ajax({
		type: "POST",
		url: "result.php",
		data: "summVvoda_cash="+summVvoda_cash+"&wm_cash="+wm_cash+"&oplata_cash="+oplata_cash+"&marga_cash="+marga_cash+"&k_oplate_cash="+k_oplate_cash
		//data: "name=John&location=Boston",
		/*success: function(data){
	     alert( "Data Saved: " + data );
	   	}*/
		//data: {summVvoda_ref: summVvoda_ref, wm_ref: wm_ref, oplata_ref: oplata_ref, k_oplate_ref: k_oplate_ref}
	});
	//select_exchange1.submit();
	//alert("rabotajet1");
	
}











function myScript() {
//alert("0");

var for_oplata_v_refill = document.getElementById("payment_refill1").value;
		//alert("Cool USD:" + cool_usd);
		//alert("For olpata v refill:" + for_oplata_v_refill);
		//var ta_nu_nahuj = document.getElementById("payment_refill1").options[document.getElementById("payment_refill1").selectedIndex].setAttribute("selected", "selected");
		ta_nu_id = document.getElementById("payment_refill1").options[document.getElementById("payment_refill1").selectedIndex].text;
		ta_nu_wm = document.getElementById("currency_bill_refill1").options[document.getElementById("currency_bill_refill1").selectedIndex].text;
		//alert(ta_nu_wm);
		//alert(ta_nu_id);
		var ammount2_refill = document.getElementById("ammount_refill1").value;
		//var regExp = /\d{1+}/gi;
		//var ammount1_refill = ammount2_refill.match(regExp);
		if(isNaN(ammount2_refill)) {
			alert("Введите число");
		}
		//alert("СУмма введеная пользователем " + ammount1_refill);
		//alert("Курс WM " + document.getElementById("currency_bill_refill1").value);
		//alert("Курс валюты " + for_oplata_v_refill);
		var ammount_refill = (ammount2_refill * document.getElementById("currency_bill_refill1").value)/for_oplata_v_refill;
		//alert("2 - " + ammount2_refill);
		//alert("1 - " + ammount_refill);
		//alert("Сумма после пересчета " + ammount_refill);
		//var for_label = document.getElementById("myOption4").label;
		//var for_label2 = document.getElementById("myOption5").label;
	


		var for_itogo_refill = document.getElementById("k_oplate_refill1");
		var for_komisia_refill = document.getElementById("komisia_refill1");

		//alert("chislo" + 1000 * (cool_usd/document.getElementById("currency_bill_refill1").value));
		if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 1000");
			//alert("Cool_usd = " + cool_usd);
			//alert("Валюта, которая указана = " + for_oplata_v_refill);
			//alert("menshe");
			//alert("1000 баксов в валютке - это " + (1000 * (cool_usd/for_oplata_v_refill)));
			
			//alert("1");
			itogo_refill = ammount_refill/0.99;
			if(ta_nu_id == "USD") {
				komisar = (itogo_refill - ammount_refill) * (cool_usd/for_oplata_v_refill);	
			}

			else if(ta_nu_id == "EUR") {
				komisar = (itogo_refill - ammount_refill) * (cool_eur/for_oplata_v_refill);
			}

			else if(ta_nu_id == "RUB") {
				komisar = (itogo_refill - ammount_refill) * (cool_rub/for_oplata_v_refill);
			}

			else {
				komisar = (itogo_refill - ammount_refill) * (cool_uah/for_oplata_v_refill);
			}
			
			marga_refill = itogo_refill - ammount_refill;
			for_komisia_refill.innerHTML="1%";
			//alert("Если маржа в валютке" + marga_refill);
			//alert("Меньше чем 5 баксов в валютке " + (5 * cool_usd/for_oplata_v_refill));
			if(marga_refill < (5 * cool_usd/for_oplata_v_refill)) {
				//alert("test");
					marga_refill = 5;
					if(ta_nu_id == "USD") {
						//alert("USD");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert(komisar + " = (5 * " + cool_usd + "/" + for_oplata_v_refill + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
					else if(ta_nu_id == "EUR") {
						//alert("EUR");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert(komisar + " = (5 * " + cool_usd + "/" + for_oplata_v_refill + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						//alert("Курс рубля по отношению к доллару - " + mega_cool_rub);
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert(komisar + " = (5 * " + cool_usd + "/" + for_oplata_v_refill + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else {
						//alert("UAH");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert(komisar + " = (5 * " + cool_usd + "/" + for_oplata_v_refill + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;


			}

			else {
				//alert("Тогда комиссия 1%");
			}

			//alert(komisar);
			for_itogo_refill.value=itogo_refill.toFixed(2);

			//alert(marga);
		}

		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/

		else {
			//alert("больше 5000");
			//alert("3");
			itogo_refill = ammount_refill/0.992;
			if(ta_nu_id == "USD") {
				komisar = (itogo_refill - ammount_refill) * (cool_usd/for_oplata_v_refill);	
			}

			else if(ta_nu_id == "EUR") {
				komisar = (itogo_refill - ammount_refill) * (cool_eur/for_oplata_v_refill);
			}

			else if(ta_nu_id == "RUB") {
				komisar = (itogo_refill - ammount_refill) * (cool_rub/for_oplata_v_refill);
			}

			else {
				komisar = (itogo_refill - ammount_refill) * (cool_uah/for_oplata_v_refill);
			}
			marga_refill = itogo_refill - ammount_refill;
			for_komisia_refill.innerHTML="0.8%";

			if(marga_refill > (50 * cool_usd/for_oplata_v_refill)) {
				//alert("test2");
					marga_refill = 50;
					if(ta_nu_id == "USD") {
						//alert("USD");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (50 * cool_usd/for_oplata_v_refill);

						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id == "EUR") {
						//alert("EUR");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						//alert("Курс рубля по отношению к доллару - " + mega_cool_rub);
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else {
						//alert("UAH");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_refill = ammount_refill + komisar;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
					//alert(komisar);
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;
			}

			
			for_itogo_refill.value=itogo_refill.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);
}






function myScript1() {
//alert("1");

var for_oplata_v_cashing = document.getElementById("currency_bill_cashing1").value;
		//var ta_nu_nahuj = document.getElementById("payment_refill1").options[document.getElementById("payment_refill1").selectedIndex].setAttribute("selected", "selected");
		ta_nu_id_cashing = document.getElementById("currency_bill_cashing1").options[document.getElementById("currency_bill_cashing1").selectedIndex].text;
		ta_nu_wm_cash = document.getElementById("payment_cashing1").options[document.getElementById("payment_cashing1").selectedIndex].text;
		//alert(ta_nu_id);
		var ammount2_cashing = document.getElementById("ammount_cashing1").value;
		//var regExp = /\d{1+}/gi;
		//var ammount1_refill = ammount2_refill.match(regExp);
		if(isNaN(ammount2_cashing)) {
			alert("Введите число");
		}
		//alert("СУмма введеная пользователем " + ammount1_refill);
		//alert("Курс WM " + document.getElementById("currency_bill_refill1").value);
		//alert("Курс валюты " + for_oplata_v_cashing);
		var ammount_cashing = (ammount2_cashing * document.getElementById("payment_cashing1").value)/for_oplata_v_cashing;
		//alert("Сумма после пересчета " + ammount_refill);
		//var for_label_cashing = document.getElementById("myOption4").label;
		//var for_label2_cashing = document.getElementById("myOption5").label;
	


		var for_itogo_cashing = document.getElementById("k_oplate_cashing1");
		var for_komisia_cashing = document.getElementById("komisia_cashing1");

		//alert("chislo" + 1000 * (cool_usd/document.getElementById("currency_bill_refill1").value));

		if(ammount2_cashing < (5000 * (cool_usd/document.getElementById("payment_cashing1").value))) {
			//alert("menshe 1000");
			//alert("Cool_usd = " + cool_usd);
			//alert("Валюта, которая указана = " + for_oplata_v_refill);
			//alert("menshe");
			//alert("1000 баксов в валютке - это " + (1000 * (cool_usd/for_oplata_v_refill)));
			
			//alert("1");
			itogo_cashing = ammount_cashing /0.97;
			if(ta_nu_id_cashing == "WMZ") {
				//alert("WMZ");

				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_usd/for_oplata_v_cashing);	
			}

			else if(ta_nu_id_cashing == "WME") {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_eur/for_oplata_v_cashing);
			}

			else if(ta_nu_id_cashing == "WMR") {
				//alert("WMR");
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_rub/for_oplata_v_cashing);
			}


			else {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_uah/for_oplata_v_cashing);
			}
			
			marga_cashing = itogo_cashing - ammount_cashing;
			//alert("marga_cashing: " + marga_cashing);

			for_komisia_cashing.innerHTML="3%";
			//alert("Если маржа в валютке" + marga_refill);
			//alert("Меньше чем 5 баксов в валютке " + (5 * cool_usd/for_oplata_v_refill));
			if(marga_cashing < (5 * cool_usd/for_oplata_v_cashing)) {
				//alert("test");
					marga_cashing = itogo_cashing - ammount_cashing;
					if(ta_nu_id_cashing == "WMZ") {
						//alert("Курс WMZ = " + for_oplata_v_cashing);
						//alert(cool_usd);
						//alert(for_oplata_v_cashing);
						//alert("USD");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert(komisar_cashing + " = (5 * " + cool_usd + "/" + for_oplata_v_cashing + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Комиссия " + komisar_cashing.toFixed(2));
						//alert(itogo_cashing + " = " + ammount_cashing + " + " + komisar_cashing);
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
					else if(ta_nu_id_cashing == "WME") {
						//alert("Курс WME = " + for_oplata_v_cashing);
						//alert("EUR");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert(komisar_cashing + " = (5 * " + cool_usd + "/" + for_oplata_v_cashing + ")");
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Комиссия " + komisar_cashing.toFixed(2));
						//alert(itogo_cashing + " = " + ammount_cashing + " + " + komisar_cashing);
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("Курс WMR = " + for_oplata_v_cashing);
						//alert("RUB");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						//alert("Курс рубля по отношению к доллару - " + mega_cool_rub);
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert(komisar_cashing + " = (5 * " + cool_usd + "/" + for_oplata_v_cashing + ")");
						//alert("Cool_rub: " + cool_rub);
						//alert("Оплата в кэшинг: " + for_oplata_v_cashing);
						//alert("Комиссия " + komisar_cashing.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Комиссия " + komisar_cashing.toFixed(2));
						//alert(itogo_cashing + " = " + ammount_cashing + " + " + komisar_cashing);
						//alert("Сумма к оплате " + itogo_cashing.toFixed(2));
					}

					else {
						//alert("Курс WMU = " + for_oplata_v_cashing);
						//alert("UAH");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert(komisar_cashing + " = (5 * " + cool_usd + "/" + for_oplata_v_cashing + ")");
						
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Комиссия " + komisar_cashing.toFixed(2));
						//alert(itogo_cashing + " = " + ammount_cashing + " + " + komisar_cashing);
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;


			}

			else {
				//alert("Тогда комиссия 1%");
			}


			for_itogo_cashing.value=itogo_cashing.toFixed(2);

			//alert(marga);
		}

		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/

		else {
			//alert("больше 5000");
			//alert("3");
			itogo_cashing = ammount_cashing/0.975;
			if(ta_nu_id_cashing == "WMZ") {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_usd/for_oplata_v_cashing);	
			}

			else if(ta_nu_id_cashing == "WME") {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_eur/for_oplata_v_cashing);
			}

			else if(ta_nu_id_cashing == "WMR") {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_rub/for_oplata_v_cashing);
			}

			else {
				komisar_cashing = (itogo_cashing - ammount_cashing) * (cool_uah/for_oplata_v_cashing);
			}
			
			marga_cashing = itogo_cashing - ammount_cashing;

			for_komisia_cashing.innerHTML="2.5%";

			if(marga_cashing > (50 * cool_usd/for_oplata_v_cashing)) {
				//alert("test2");
					marga_cashing = itogo_cashing - ammount_cashing;
					if(ta_nu_id_cashing == "WMZ") {
						//alert("USD");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						var komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id_cashing == "WME") {
						//alert("EUR");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						var komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("RUB");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						//alert("Курс рубля по отношению к доллару - " + mega_cool_rub);
						var komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}

					else {
						//alert("UAH");
						//alert("Сумма к зачислению" + ammount_refill.toFixed(2));
						var komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						itogo_cashing = ammount_cashing + komisar_cashing;
						//alert("Сумма к оплате " + itogo_refill.toFixed(2));
					}
										
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
			}

			
			for_itogo_cashing.value=itogo_cashing.toFixed(2);


		}
	//alert("KOMISIA: " + komisar_cashing + " " + ta_nu_id_cashing);
}





function myScript3() {
//alert("3");
		var for_oplata_v_refill = document.getElementById("payment_refill1").value;
		var for_oplata_v_wm = document.getElementById("currency_bill_refill1").value;
		//alert("Oplata v " + for_oplata_v_refill);
		//alert("V WM " + for_oplata_v_wm);
		

		ta_nu_id = document.getElementById("payment_refill1").options[document.getElementById("payment_refill1").selectedIndex].text;
		ta_nu_wm = document.getElementById("currency_bill_refill1").options[document.getElementById("currency_bill_refill1").selectedIndex].text;



		var for_itogo_refill2 = document.getElementById("k_oplate_refill1").value;

		var ammount_refill = 0;

		var ammount2_refill = (for_itogo_refill2 * for_oplata_v_refill)/for_oplata_v_wm;
		
		var for_komisia_refill = document.getElementById("komisia_refill1");
		var param = false;
		if(ammount2_refill < (5000 * (cool_usd/for_oplata_v_wm))) {	
			
			
			ammount_refill = ammount2_refill*0.99;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id == "USD") {
				if(for_itogo_refill2 > 5.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}

				
			}

			else if(ta_nu_id == "EUR") {
				if(for_itogo_refill2 > 4.48) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}

				
			}

			else if(ta_nu_id == "RUB") {
				if(for_itogo_refill2 > 337.84) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert(ammount2_refill);
				//alert(ammount_refill);
				/*alert(cool_rub);
				alert(for_oplata_v_wm);
				alert(ammount_refill);*/
				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				/*alert(ammount2_refill - ammount_refill);
				alert("cool_usd: " + cool_usd + "for_oplata_v_refill: " + for_oplata_v_refill);
				alert(komisar);*/
				param = true;
				}
				
			}

			else {
				if(for_itogo_refill2 > 125.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}
				
			}
			//alert("KOMISAR: " + komisar);
			marga_refill = ammount2_refill - ammount_refill;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);			
			if(param) {		
				for_komisia_refill.innerHTML="1%";
			}
			else {
				if(ta_nu_id == "USD") {
					for_komisia_refill.innerHTML="5 USD";
				}

				else if(ta_nu_id == "EUR") {
					for_komisia_refill.innerHTML="4.48 EUR";
				}

				else if(ta_nu_id == "RUB") {
					for_komisia_refill.innerHTML="337.84 RUB";
				}

				else {
					for_komisia_refill.innerHTML="125 UAH";
				}
			}		
			//alert("Sravnenije: " + (5/(cool_usd/for_oplata_v_refill)));
			if(komisar < 5 && param) {
				//alert("test");
					marga_refill = 5;
					if(ta_nu_id == "USD") {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_usd/for_oplata_v_wm);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id == "EUR") {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_eur/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB menshe");
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_rub/for_oplata_v_wm);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_uah/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;
					document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);
			}


			if(komisar > 5 && param) {
				document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);
			}

			if(!param) {


				document.getElementById("ammount_refill1").value="0.00";
			}
			
		}
		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/


		else {
			//alert("больше 5000");
			//alert("3");
			ammount_refill = ammount2_refill*0.992;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id == "USD") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id == "EUR") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id == "RUB") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_rub: " + cool_rub + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);
			}
			//alert("KOMISAR: " + komisar);
			marga_refill = ammount2_refill - ammount_refill;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);	
			for_komisia_refill.innerHTML="0.8%";	



			if(komisar > 50) {
				//alert("test");
					marga_refill = 50;
					if(ta_nu_id == "USD") {
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_usd/for_oplata_v_wm);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id == "EUR") {
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_eur/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB menshe");
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_rub/for_oplata_v_wm);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {					
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_uah/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;
			}

			//alert("KOMISIA: " + komisar + " " + ta_nu_id);
			document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);
		
}















function myScript04() {
//alert("4");
		var for_oplata_v_cashing = document.getElementById("currency_bill_cashing1").value;
		var for_oplata_v_wm_cashing = document.getElementById("payment_cashing1").value;
		//alert("Oplata v " + for_oplata_v_refill);
		//alert("V WM " + for_oplata_v_wm);
		

		ta_nu_id_cashing = document.getElementById("currency_bill_cashing1").options[document.getElementById("currency_bill_cashing1").selectedIndex].text;
		ta_nu_wm_cashing = document.getElementById("payment_cashing1").options[document.getElementById("payment_cashing1").selectedIndex].text;



		var for_itogo_cashing2 = document.getElementById("k_oplate_cashing1").value;

		var ammount_cashing = 0;

		var ammount2_cashing = (for_itogo_cashing2 * for_oplata_v_cashing)/for_oplata_v_wm_cashing;
		/*alert("for_itogo_cashing2: " + for_itogo_cashing2);
		alert("for_oplata_v_cashing: " + for_oplata_v_cashing);
		alert("for_oplata_v_wm_cashing: " + for_oplata_v_wm_cashing);*/

		
		var for_komisia_cashing = document.getElementById("komisia_cashing1");
		var param_cashing = false;
		if(ammount2_cashing < (5000 * (cool_usd/for_oplata_v_wm_cashing))) {	
			//alert("vipoln");
			ammount_cashing = ammount2_cashing*0.97;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id_cashing == "WMZ") {
				if(for_itogo_cashing2 > 5.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WME") {
				if(for_itogo_cashing2 > 4.48) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WMR") {
				if(for_itogo_cashing2 > 337.84) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert(ammount2_refill);
				//alert(ammount_refill);
				/*alert(cool_rub);
				alert(for_oplata_v_wm);
				alert(ammount_refill);*/
				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				/*alert(ammount2_refill - ammount_refill);
				alert("cool_usd: " + cool_usd + "for_oplata_v_refill: " + for_oplata_v_refill);
				alert(komisar);*/
				param_cashing = true;
				}
				
			}

			else {
				if(for_itogo_cashing2 > 125.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param_cashing = true;
				}
				
			}
			//alert("KOMISAR: " + komisar);
			marga_cashing = ammount2_cashing - ammount_cashing;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);			
			if(param_cashing) {		
				for_komisia_cashing.innerHTML="3%";
				document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}
			else {
				if(ta_nu_id_cashing == "WMZ") {
					//alert("USD");

					for_komisia_cashing.innerHTML="5 USD";
				}

				else if(ta_nu_id_cashing == "WME") {

					for_komisia_cashing.innerHTML="4.48 EUR";
				}

				else if(ta_nu_id_cashing == "WMR") {
					for_komisia_cashing.innerHTML="337.84 RUB";
				}

				else {
					//alert("UAH");

					for_komisia_cashing.innerHTML="125 UAH";
				}
				document.getElementById("ammount_cashing1").value="0.00";
			}		
			//alert("Sravnenije: " + (5/(cool_usd/for_oplata_v_refill)));
			alert(komisar_cashing);
			alert(param_cashing);
			if(komisar_cashing < 5 && param_cashing) {
				//alert("test");
					marga_cashing = 5;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("RUB menshe");
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
					document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}


			
			
			
			
		}
		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/


		else {
			alert("else");
			//alert("больше 5000");
			//alert("3");
			ammount_cashing = ammount2_cashing*0.975;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id_cashing == "WMR") {
				alert("usd");
				alert("ammount2_cashing: " + ammount2_cashing);
				alert("ammount_cashing: " + ammount_cashing);
				alert("for_oplata_v_wm_cashing: " + for_oplata_v_wm_cashing);
				alert("cool_usd: " + cool_usd);
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id_cashing == "WME") {
				alert("eur");
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id_cashing == "WMR") {
				alert("rub");
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_rub: " + cool_rub + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else {
				alert("uah");
				alert("ammount2_cashing: " + ammount2_cashing);
				alert("ammount_cashing: " + ammount_cashing);
				alert("for_oplata_v_wm_cashing: " + for_oplata_v_wm_cashing);
				alert("cool_usd: " + cool_usd);
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);
			}
			//alert("KOMISAR: " + komisar);
			marga_cashing = ammount2_cashing - ammount_cashing;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);	
			for_komisia_cashing.innerHTML="2.5%";	

			alert("komisar_cashing: " + komisar_cashing);

			if(komisar_cashing > 50) {
				//alert("test");
					marga_cashing = 50;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("RUB menshe");
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {					
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
			}

			//alert("KOMISIA: " + komisar + " " + ta_nu_id);
			document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);
		
}




function myScript4() {

		var for_oplata_v_cashing = document.getElementById("currency_bill_cashing1").value;
		var for_oplata_v_wm_cashing = document.getElementById("payment_cashing1").value;
	

		ta_nu_id_cashing = document.getElementById("currency_bill_cashing1").options[document.getElementById("currency_bill_cashing1").selectedIndex].text;
		ta_nu_wm_cashing = document.getElementById("payment_cashing1").options[document.getElementById("payment_cashing1").selectedIndex].text;



		var for_itogo_cashing2 = document.getElementById("k_oplate_cashing1").value;

		var ammount_cashing = 0;

		var ammount2_cashing = (for_itogo_cashing2 * for_oplata_v_cashing)/for_oplata_v_wm_cashing;

		
		var for_komisia_cashing = document.getElementById("komisia_cashing1");
		var param_cashing = false;
		if(ammount2_cashing < (5000 * (cool_usd/for_oplata_v_wm_cashing))) {	

			ammount_cashing = ammount2_cashing*0.97;
						
			if(ta_nu_id_cashing == "WMZ") {
				if(for_itogo_cashing2 > 5.00) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WME") {
				if(for_itogo_cashing2 > 4.48) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WMR") {
				if(for_itogo_cashing2 > 337.84) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}
				
			}

			else {
				if(for_itogo_cashing2 > 125.00) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}
				
			}
			
			marga_cashing = ammount2_cashing - ammount_cashing;
					
			if(param_cashing) {		
				for_komisia_cashing.innerHTML="3%";
				document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}
			else {
				if(ta_nu_id_cashing == "WMZ") {
					//alert("USD");

					for_komisia_cashing.innerHTML="5 USD";
				}

				else if(ta_nu_id_cashing == "WME") {

					for_komisia_cashing.innerHTML="4.48 EUR";
				}

				else if(ta_nu_id_cashing == "WMR") {
					for_komisia_cashing.innerHTML="337.84 RUB";
				}

				else {
					//alert("UAH");

					for_komisia_cashing.innerHTML="125 UAH";
				}
				document.getElementById("ammount_cashing1").value="0.00";
			}		
			
			if(komisar_cashing < 5 && param_cashing) {
				//alert("test");
					marga_cashing = 5;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("RUB menshe");
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						
						
					}

					else {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
					document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}


			
			
			
			
		}
		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/


		else {
			//alert("else");
			
			ammount_cashing = ammount2_cashing*0.975;
						
			if(ta_nu_id_cashing == "WMR") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else if(ta_nu_id_cashing == "WME") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else if(ta_nu_id_cashing == "WMR") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}
			
			marga_cashing = ammount2_cashing - ammount_cashing;
			
			for_komisia_cashing.innerHTML="2.5%";	

			

			if(komisar_cashing > 50) {
				//alert("test");
					marga_cashing = 50;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						
						
					}

					else {					
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
			}

			//alert("KOMISIA: " + komisar + " " + ta_nu_id);
			document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);
	

}

















function myScript5() {
//alert("3");
		var for_oplata_v_refill = document.getElementById("payment_refill1").value;
		var for_oplata_v_wm = document.getElementById("currency_bill_refill1").value;
		//alert("Oplata v " + for_oplata_v_refill);
		//alert("V WM " + for_oplata_v_wm);
		

		ta_nu_id = document.getElementById("payment_refill1").options[document.getElementById("payment_refill1").selectedIndex].text;
		ta_nu_wm = document.getElementById("currency_bill_refill1").options[document.getElementById("currency_bill_refill1").selectedIndex].text;



		var for_itogo_refill2 = document.getElementById("k_oplate_refill1").value;

		var ammount_refill = 0;

		var ammount2_refill = (for_itogo_refill2 * for_oplata_v_refill)/for_oplata_v_wm;
		
		var for_komisia_refill = document.getElementById("komisia_refill1");
		var param = false;
		if(ammount2_refill < (5000 * (cool_usd/for_oplata_v_wm))) {	
			
			ammount_refill = ammount2_refill*0.99;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id == "USD") {
				if(for_itogo_refill2 > 5.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}

				
			}

			else if(ta_nu_id == "EUR") {
				if(for_itogo_refill2 > 4.48) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}

				
			}

			else if(ta_nu_id == "RUB") {
				if(for_itogo_refill2 > 337.84) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert(ammount2_refill);
				//alert(ammount_refill);
				/*alert(cool_rub);
				alert(for_oplata_v_wm);
				alert(ammount_refill);*/
				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				/*alert(ammount2_refill - ammount_refill);
				alert("cool_usd: " + cool_usd + "for_oplata_v_refill: " + for_oplata_v_refill);
				alert(komisar);*/
				param = true;
				}
				
			}

			else {
				if(for_itogo_refill2 > 125.00) {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);

				//alert("komisar: " + komisar);
				//alert("курс доллара: " + for_oplata_v_wm/cool_usd);
				param = true;
				}
				
			}
			//alert("KOMISAR: " + komisar);
			marga_refill = ammount2_refill - ammount_refill;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);			
			if(param) {		
				for_komisia_refill.innerHTML="1%";
			}
			else {
				if(ta_nu_id == "USD") {
					for_komisia_refill.innerHTML="5 USD";
				}

				else if(ta_nu_id == "EUR") {
					for_komisia_refill.innerHTML="4.48 EUR";
				}

				else if(ta_nu_id == "RUB") {
					for_komisia_refill.innerHTML="337.84 RUB";
				}

				else {
					for_komisia_refill.innerHTML="125 UAH";
				}
			}		
			//alert("Sravnenije: " + (5/(cool_usd/for_oplata_v_refill)));
			if(komisar < 5 && param) {
				//alert("test");
					marga_refill = 5;
					if(ta_nu_id == "USD") {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_usd/for_oplata_v_wm);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id == "EUR") {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_eur/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB menshe");
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_rub/for_oplata_v_wm);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {
						
						komisar = (5 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_uah/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;
					document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);
			}


			if(komisar > 5 && param) {
				document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);
			}

			if(!param) {


				document.getElementById("ammount_refill1").value="0.00";
			}
			
		}
		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/


		else {
			//alert("больше 5000");
			//alert("3");
			ammount_refill = ammount2_refill*0.992;
			//alert("Сумма к пополнению " + ammount_refill);			
			if(ta_nu_id == "USD") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_usd: " + cool_usd + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id == "EUR") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_eur: " + cool_eur + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else if(ta_nu_id == "RUB") {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_rub: " + cool_rub + "for_oplata_v_wm: " + for_oplata_v_wm);
			}

			else {
				//alert("ammount2_refill: " + ammount2_refill + "ammount_refill: " + ammount_refill);
				komisar = (ammount2_refill - ammount_refill)*(for_oplata_v_wm/cool_usd);
				//alert("cool_uah: " + cool_uah + "for_oplata_v_wm: " + for_oplata_v_wm);
			}
			//alert("KOMISAR: " + komisar);
			marga_refill = ammount2_refill - ammount_refill;
			//alert("Marga: " + marga_refill + " " + ta_nu_id);	
			for_komisia_refill.innerHTML="0.8%";	



			if(komisar > 50) {
				//alert("test");
					marga_refill = 50;
					if(ta_nu_id == "USD") {
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_usd/for_oplata_v_wm);
						//alert("ammount_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					else if(ta_nu_id == "EUR") {
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_eur/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else if(ta_nu_id == "RUB") {
						//alert("RUB menshe");
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_rub/for_oplata_v_wm);
						//alert("RUB: " + cool_rub);
						//alert("ammount2_refill: " + ammount_refill + " komisar: " + komisar + " for_oplata_v_refill/cool_usd: " + for_oplata_v_refill/cool_usd);
						//alert(mega_cool_rub);
						//alert(for_oplata_v_refill/cool_usd);
						
					}

					else {					
						
						komisar = (50 * cool_usd/for_oplata_v_refill);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_refill = (for_itogo_refill2 - komisar);
						ammount_refill = ammount3_refill * (cool_uah/for_oplata_v_wm);
						//alert(for_oplata_v_refill/cool_usd);
						
					}
					for_komisia_refill.innerHTML=komisar.toFixed(2) + " " + ta_nu_id;
			}

			//alert("KOMISIA: " + komisar + " " + ta_nu_id);
			document.getElementById("ammount_refill1").value=ammount_refill.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);

}




















function myScript6() {
		var for_oplata_v_cashing = document.getElementById("currency_bill_cashing1").value;
		var for_oplata_v_wm_cashing = document.getElementById("payment_cashing1").value;
	

		ta_nu_id_cashing = document.getElementById("currency_bill_cashing1").options[document.getElementById("currency_bill_cashing1").selectedIndex].text;
		ta_nu_wm_cashing = document.getElementById("payment_cashing1").options[document.getElementById("payment_cashing1").selectedIndex].text;



		var for_itogo_cashing2 = document.getElementById("k_oplate_cashing1").value;

		var ammount_cashing = 0;

		var ammount2_cashing = (for_itogo_cashing2 * for_oplata_v_cashing)/for_oplata_v_wm_cashing;

		
		var for_komisia_cashing = document.getElementById("komisia_cashing1");
		var param_cashing = false;
		if(ammount2_cashing < (5000 * (cool_usd/for_oplata_v_wm_cashing))) {	

			ammount_cashing = ammount2_cashing*0.97;
						
			if(ta_nu_id_cashing == "WMZ") {
				if(for_itogo_cashing2 > 5.00) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WME") {
				if(for_itogo_cashing2 > 4.48) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}

				
			}

			else if(ta_nu_id_cashing == "WMR") {
				if(for_itogo_cashing2 > 337.84) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}
				
			}

			else {
				if(for_itogo_cashing2 > 125.00) {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
				param_cashing = true;
				}
				
			}
			
			marga_cashing = ammount2_cashing - ammount_cashing;
					
			if(param_cashing) {		
				for_komisia_cashing.innerHTML="3%";
				document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}
			else {
				if(ta_nu_id_cashing == "WMZ") {
					//alert("USD");

					for_komisia_cashing.innerHTML="5 USD";
				}

				else if(ta_nu_id_cashing == "WME") {

					for_komisia_cashing.innerHTML="4.48 EUR";
				}

				else if(ta_nu_id_cashing == "WMR") {
					for_komisia_cashing.innerHTML="337.84 RUB";
				}

				else {
					//alert("UAH");

					for_komisia_cashing.innerHTML="125 UAH";
				}
				document.getElementById("ammount_cashing1").value="0.00";
			}		
			
			if(komisar_cashing < 5 && param_cashing) {
				//alert("test");
					marga_cashing = 5;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						//alert("RUB menshe");
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						
						
					}

					else {
						
						komisar_cashing = (5 * cool_usd/for_oplata_v_cashing);
						//alert("Комиссия " + komisar.toFixed(2));
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
					document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);
			}


			
			
			
			
		}
		/*else if(ammount2_refill < (5000 * (cool_usd/document.getElementById("currency_bill_refill1").value))) {
			//alert("menshe 5000");
			//alert("2");
			itogo_refill = ammount_refill * 1.008;
			
			for_komisia_refill.innerHTML="0.8%";
			for_itogo_refill.innerHTML=itogo_refill.toFixed(2) + " " + ta_nu_id;
		}*/


		else {
			//alert("else");
			
			ammount_cashing = ammount2_cashing*0.975;
						
			if(ta_nu_id_cashing == "WMR") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else if(ta_nu_id_cashing == "WME") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else if(ta_nu_id_cashing == "WMR") {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}

			else {
				
				komisar_cashing = (ammount2_cashing - ammount_cashing)*(for_oplata_v_wm_cashing/cool_usd);
				
			}
			
			marga_cashing = ammount2_cashing - ammount_cashing;
			
			for_komisia_cashing.innerHTML="2.5%";	

			

			if(komisar_cashing > 50) {
				//alert("test");
					marga_cashing = 50;
					if(ta_nu_id_cashing == "WMZ") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_usd/for_oplata_v_wm_cashing);
						
						
					}
					else if(ta_nu_id_cashing == "WME") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_eur/for_oplata_v_wm_cashing);
						
						
					}

					else if(ta_nu_id_cashing == "WMR") {
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_rub/for_oplata_v_wm_cashing);
						
						
					}

					else {					
						
						komisar_cashing = (50 * cool_usd/for_oplata_v_cashing);
						
						ammount3_cashing = (for_itogo_cashing2 - komisar_cashing);
						ammount_cashing = ammount3_cashing * (cool_uah/for_oplata_v_wm_cashing);
						
						
					}
					for_komisia_cashing.innerHTML=komisar_cashing.toFixed(2) + " " + ta_nu_id_cashing;
			}

			//alert("KOMISIA: " + komisar + " " + ta_nu_id);
			document.getElementById("ammount_cashing1").value=ammount_cashing.toFixed(2);


		}
		//alert("KOMISIA: " + komisar + " " + ta_nu_id);
	


}
























/////////////////////////////////////////////////////////////////////




	/*alert("test");*/
	
	var count_array = document.getElementsByTagName("option");
	for (var i = 0; i < count_array.length; i++) {
		if(count_array[i].hasAttribute("label")) {
			//alert(count_array[i].getAttribute("label"));

			count_array[i].removeAttribute("id");
			count_array[i].setAttribute("id", "myOption" + i);
			//alert(count_array[i].getAttribute("id"));
		}
	}

	//alert(document.getElementById("myOption4").value);
	

	

	var pereborchick = document.getElementsByClassName("perebor");
	var cool_usd = 0;
	var cool_eur = 0;
	var cool_rub = 0;
	var cool_uah = 0;

	for(var i = 0; i < pereborchick.length; i++) {
		//alert(pereborchick[i].value);
		if(pereborchick[i].getAttribute("id") == "USD") {
			//alert(pereborchick[i].getAttribute("id"));
			cool_usd = pereborchick[i].value;
			//alert(cool_usd);
		}

		if(pereborchick[i].getAttribute("id") == "EUR") {
			//alert(pereborchick[i].getAttribute("id"));
			cool_eur = pereborchick[i].value;
			//alert(cool_eur);
		}

		if(pereborchick[i].getAttribute("id") == "RUB") {
			//alert(pereborchick[i].getAttribute("id"));
			cool_rub = pereborchick[i].value;
			//alert(cool_rub);
		}

		if(pereborchick[i].getAttribute("id") == "UAH") {
			//alert(pereborchick[i].getAttribute("id"));
			cool_uah = pereborchick[i].value;
			//alert(cool_uah);
		}	
	}

	var mega_cool_usd = (cool_usd/cool_usd).toFixed(2);
	//alert(mega_cool_usd);
	//alert(cool_usd);

	var mega_cool_eur = (cool_eur/cool_usd).toFixed(2);
	//alert(mega_cool_eur);

	var mega_cool_rub = (cool_rub/cool_usd).toFixed(2);
	//alert(mega_cool_rub);

	var mega_cool_uah = (cool_uah/cool_usd).toFixed(2);
	//alert(mega_cool_uah);










	var itogo_refill = 0;
	var marga_refill = 0;
/////////////////////////////////////////////////////////////////

	document.getElementById('ammount_refill1').onfocus=function() {
		jQuery("#k_oplate_refill1").removeClass("red_border");
		jQuery("#ammount_refill1").addClass("red_border");
	}


	document.getElementById('k_oplate_refill1').onfocus=function() {
		jQuery("#ammount_refill1").removeClass("red_border");
		jQuery("#k_oplate_refill1").addClass("red_border");
	}










	document.getElementById('ammount_cashing1').onfocus=function() {
		jQuery("#k_oplate_cashing1").removeClass("red_border");
		jQuery("#ammount_cashing1").addClass("red_border");
	}


	document.getElementById('k_oplate_cashing1').onfocus=function() {
		jQuery("#ammount_cashing1").removeClass("red_border");
		jQuery("#k_oplate_cashing1").addClass("red_border");
	}
























///////////////////////////////////////////////////////////////////

	document.getElementById('ammount_refill1').onblur=function() {

		myScript();
	}


	document.getElementById('ammount_refill1').onchange=function() {

		myScript();
	}


	/*document.getElementById("ammount_refill1").onkeypress=function() {
		//alert("onkeypress");
	}*/


	window.onkeyup = pressed;
	function pressed(e) {
		key = e.keyCode;
		
		if (key == 8) {
			if(jQuery('#ammount_refill1').hasClass("red_border")) {
		    	myScript();		    	
	    	}

	    	else {
	    		myScript3();
	    	}


	    	if(jQuery('#ammount_cashing1').hasClass("red_border")) {		 
		    	myScript1();
	    	}

	    	else {
	    		myScript4();
	    	}
		}

		else if(isNaN(key)) {

			e.preventDefault();
		}

		else {
			if(jQuery('#ammount_refill1').hasClass("red_border")) {
				myScript();
			}
			else {
				myScript3();
			}

			if(jQuery('#ammount_cashing1').hasClass("red_border")) {		 
		    	myScript1();
	    	}

	    	else {
	    		myScript4();
	    	}
		}
	}


	document.getElementById('currency_bill_refill1').onchange=function() {

		//alert("onchange");
		if(jQuery('#ammount_refill1').hasClass("red_border")) {
			myScript();
		}

		else {
			myScript3();
		}

	}





	document.getElementById('payment_refill1').onchange=function() {

		//alert("onchange");
		if(jQuery('#ammount_refill1').hasClass("red_border")) {
			myScript();
		}

		else {
			myScript3();
		}
	}






////ВЫВОД////


	var itogo_cashing = 0;
	var marga_cashing = 0;
	document.getElementById('ammount_cashing1').onblur=function() {

		myScript1();
	}



	document.getElementById('ammount_cashing1').onchange=function() {

		myScript1();
	}


	document.getElementById('currency_bill_cashing1').onchange=function() {

		myScript1();
	}



	document.getElementById('payment_cashing1').onchange=function() {

		myScript1();
	}




	document.getElementById("span_send").onclick=function() {

	//alert("test3");
	send_dialog();
	}



	document.getElementById("span_send_cash").onclick=function() {

	//alert("test3");
	send_dialog_cash();
	}



/*	document.getElementById("span_send_stock").onclick=function() {
		send_dialog_stock();
	}*/


///////////////////////////////////////////////////////////////////



	document.getElementById("k_oplate_refill1").onblur=function() {

		myScript5();
	}

	document.getElementById("k_oplate_refill1").onchange=function() {

		myScript3();
	}


	document.getElementById("k_oplate_cashing1").onblur=function() {

		myScript6();
	}

	document.getElementById("k_oplate_cashing1").onchange=function() {

		myScript4();
	}


	document.getElementById('payment_cashing1').onchange=function() {
	//alert("test1");
	if(jQuery('#ammount_cashing1').hasClass("red_border")) {
				//alert("myScript1");		 
		    	myScript1();
	    	}

	    	else {
	    		//alert("myScript4");	
	    		myScript4();
	    	}
}


document.getElementById('currency_bill_cashing1').onchange=function() {
	//alert("test");
	if(jQuery('#ammount_cashing1').hasClass("red_border")) {
				//alert("myScript1");		 
		    	myScript1();
	    	}

	    	else {
	    		//alert("myScript4");	
	    		myScript4();
	    	}
}







});