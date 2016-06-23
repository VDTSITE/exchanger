<?php /* Smarty version 3.1.25, created on 2016-06-04 18:37:12
         compiled from "/home/vdtvdt/vdt.site/exchanger1/templates/test1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9597618685752f5a868eaa0_66859805%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6127a790f15ef7a57d5253bd0849ebd33a4dccfb' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/templates/test1.tpl',
      1 => 1464697417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9597618685752f5a868eaa0_66859805',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5752f5a86a4ba1_91287172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5752f5a86a4ba1_91287172')) {
function content_5752f5a86a4ba1_91287172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9597618685752f5a868eaa0_66859805';
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
		
		Спасибо, мы сейчас с Вами свяжемся
	</div>
</body>
</html>
<?php }
}
?>