<?php /* Smarty version 3.1.25, created on 2016-05-07 00:30:23
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/delete_mail_idc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:663826268572d0cef85a835_53001892%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8538b83fcc11a0f235481f632aa13a0007460f2' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/delete_mail_idc.tpl',
      1 => 1462530174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663826268572d0cef85a835_53001892',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572d0cef874e43_77946924',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d0cef874e43_77946924')) {
function content_572d0cef874e43_77946924 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '663826268572d0cef85a835_53001892';
?>
<h2>Вы действительно хотите удалить информацию о заказе клиента <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_mail_idc.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

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