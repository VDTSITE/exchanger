<?php /* Smarty version 3.1.25, created on 2016-06-13 17:26:57
         compiled from "/home/vdtvdt/vdt.site/exchanger1/templates/test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1546148576575ec2b15db5c2_11349407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc00e6c1e3a7a07d1410f4d5c71c19aaa4df6b76' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/templates/test.tpl',
      1 => 1465827972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546148576575ec2b15db5c2_11349407',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575ec2b16364a0_46310518',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575ec2b16364a0_46310518')) {
function content_575ec2b16364a0_46310518 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1546148576575ec2b15db5c2_11349407';
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset=utf-8>
	<title>Диалоговые окна</title>
	<link rel="stylesheet" href="css/style_dialog.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="js/dialog.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/correct.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="js/file.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
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
<?php }
}
?>