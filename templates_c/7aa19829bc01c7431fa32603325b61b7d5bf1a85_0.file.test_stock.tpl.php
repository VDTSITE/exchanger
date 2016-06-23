<?php /* Smarty version 3.1.25, created on 2016-06-11 20:24:03
         compiled from "/home/vdtvdt/vdt.site/exchanger1/templates/test_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1028543181575c4933b4f768_66168694%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa19829bc01c7431fa32603325b61b7d5bf1a85' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/templates/test_stock.tpl',
      1 => 1465649809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028543181575c4933b4f768_66168694',
  'variables' => 
  array (
    'type_operation' => 0,
    'id_currency' => 0,
    'percent' => 0,
    'k_oplate' => 0,
    'k_polucheniju' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575c4933bbfbc3_77573778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575c4933bbfbc3_77573778')) {
function content_575c4933bbfbc3_77573778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1028543181575c4933b4f768_66168694';
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
 src="js/file.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
				Тип операции: <?php if ($_smarty_tpl->tpl_vars['type_operation']->value == 0) {?>
				Ввод
				<?php } else { ?>
				Вывод
				<?php }?>
			</div>

			<div class="form-group for_dialog">
				Валюта: <?php if ($_smarty_tpl->tpl_vars['id_currency']->value == 1) {?>
				WMZ
				<?php } elseif ($_smarty_tpl->tpl_vars['id_currency']->value == 2) {?>
				WME
				<?php } elseif ($_smarty_tpl->tpl_vars['id_currency']->value == 3) {?>
				WMR
				<?php } else { ?>
				WMU
				<?php }?>
			</div>

			<div class="form-group for_dialog">
				Процент: <?php echo $_smarty_tpl->tpl_vars['percent']->value;?>

			</div>

			<div class="form-group for_dialog">
				К оплате: <?php echo $_smarty_tpl->tpl_vars['k_oplate']->value;?>

			</div>

			<div class="form-group for_dialog">
				К получению: <?php echo $_smarty_tpl->tpl_vars['k_polucheniju']->value;?>

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
</html><?php }
}
?>