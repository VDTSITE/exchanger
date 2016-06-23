<!DOCTYPE html>

<html>
<head>
	<meta charset=utf-8>
	<title>Диалоговые окна</title>
	<link rel="stylesheet" href="css/style_dialog.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/dialog.js"></script>
	<script src="js/correct.js"></script>

	<script src="js/file.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</head>
<body>
	<div class="dialog_wrapper" style="margin-left: auto;
    margin-right: auto;
        width: 86%;">
		<form action="test.php" name="form_send" method="post">
		<br />
			<div class="form-group for_dialog">
				<input type="text" class="form-control" id="tel1" name="tel" value="+38">
				<span id="error_tel1" style="color: #cc0000;"></span>
			</div>
			
			<div class="form-group for_dialog">
				<label for="last_name">Фамилия</label>
				<input type="text" class="form-control" id="last_name1" name="last_name">
				<span id="error_last_name1" style="color: #cc0000;"></span>
			</div>

			<div class="form-group for_dialog">
				<label for="first_name">Имя</label>
				<input type="text" class="form-control" id="first_name1" name="first_name">
				<span id="error_first_name1" style="color: #cc0000;"></span>
			</div>


			<input type="hidden" id="input_refill">
				

			<div class="checkbox" style="    width: 88%;
    margin-left: auto;
    margin-right: auto;">
				<input type="checkbox" id="rules1"> Я ознакомлен с правилами и условиями сервиса
			</div>


			<div class="for_buttons" style="margin-left: 165px;">
				<input type="submit" name="cancel" class="btn btn-default" value="CANCEL">&nbsp&nbsp<input type="button" id="send1" name="ok" class="btn btn-default" value="OK">
				<span id="error_send1" style="color: #cc0000;"></span>
			</div>
		</form>
	</div>
</body>
</html>
