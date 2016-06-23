<?php /* Smarty version 3.1.25, created on 2016-06-06 15:22:42
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_in.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88276092257556b123dba99_73280110%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c78ee9aff596310288c3f81acf270de53b598c' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_in.tpl',
      1 => 1465215760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88276092257556b123dba99_73280110',
  'variables' => 
  array (
    'name' => 0,
    'idi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57556b123f3e64_12138305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57556b123f3e64_12138305')) {
function content_57556b123f3e64_12138305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88276092257556b123dba99_73280110';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_request_in.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="idi" value="<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
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