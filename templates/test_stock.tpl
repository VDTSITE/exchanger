<!DOCTYPE html>

<html>
<head>
	<meta charset=utf-8>
	<title>Диалоговые окна</title>
	<link rel="stylesheet" href="css/style_dialog.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/dialog.js"></script>

	<script src="js/file.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="dialog_wrapper" style="margin-left: auto;
    margin-right: auto;
        width: 86%;">
		<form action="test_stock.php" method="post">
		<br />
			<div class="form-group for_dialog">
				<label for="tel">Телефон</label>
				<input type="text" class="form-control" id="tel1" name="tel" value="+38">
			</div>

			<div class="form-group for_dialog">
				<label for="last_name">Фамилия</label>
				<input type="text" class="form-control" id="last_name1" name="last_name">
			</div>

			<div class="form-group for_dialog">
				<label for="first_name">Имя</label>
				<input type="text" class="form-control" id="first_name1" name="first_name">
			</div>

			<div class="form-group for_dialog">
				Тип операции: {if $type_operation == 0}
				Ввод
				{else}
				Вывод
				{/if}
			</div>

			<div class="form-group for_dialog">
				Валюта: {if $id_currency == 1}
				WMZ
				{else if $id_currency == 2}
				WME
				{else if $id_currency == 3}
				WMR
				{else}
				WMU
				{/if}
			</div>

			<div class="form-group for_dialog">
				Процент: {$percent}
			</div>

			<div class="form-group for_dialog">
				К оплате: {$k_oplate}
			</div>

			<div class="form-group for_dialog">
				К получению: {$k_polucheniju}
			</div>



			<input type="hidden" id="input_refill">


			<div class="checkbox" style="    width: 88%;
    margin-left: auto;
    margin-right: auto;">
				<input type="checkbox"> Я ознакомлен с правилами и условиями сервиса
			</div>


			<div class="for_buttons" style="margin-left: 165px;">
				<a onclick="Dialog.objects['dialog'].close()" id="dialog" class="dialog dialog-close">CANCEL</a>&nbsp&nbsp<input type="submit" name="ok" class="btn btn-default" value="OK">
			</div>
		</form>
	</div>
</body>
</html>