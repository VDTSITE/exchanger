<?php /* Smarty version 3.1.25, created on 2016-03-17 01:55:11
         compiled from "/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/delete_mail_idc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142073809156e9f25fcf3889_93852545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cec1fe6e6a94b510a5ad2d4ef9b17f52730fb3f' => 
    array (
      0 => '/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/delete_mail_idc.tpl',
      1 => 1458172507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142073809156e9f25fcf3889_93852545',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e9f25fd0c012_41730469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e9f25fd0c012_41730469')) {
function content_56e9f25fd0c012_41730469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142073809156e9f25fcf3889_93852545';
?>
<h2>Вы действительно хотите удалить заказ клиента <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_mail_idc.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="icheck-blue" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="icheck-blue"/>

	</div>

	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">


	<input type="submit" name="delete" value="Удалить">
</form>








<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/assets/icheck/icheck.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/_demo/icheck.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/_demo/all-pages.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
?>