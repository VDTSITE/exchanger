<?php /* Smarty version 3.1.25, created on 2016-06-06 15:29:55
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_out.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34910685257556cc3ab8fd0_78845093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebd9f01a7d58710385fc6f22395c71b86c73512' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_out.tpl',
      1 => 1465216064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34910685257556cc3ab8fd0_78845093',
  'variables' => 
  array (
    'name' => 0,
    'ido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57556cc3ada065_75705101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57556cc3ada065_75705101')) {
function content_57556cc3ada065_75705101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34910685257556cc3ab8fd0_78845093';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_request_out.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="ido" value="<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
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