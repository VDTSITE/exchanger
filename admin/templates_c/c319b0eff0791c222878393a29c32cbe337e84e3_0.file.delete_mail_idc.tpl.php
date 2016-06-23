<?php /* Smarty version 3.1.25, created on 2016-04-26 17:50:55
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_mail_idc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:489475030571f804fed2808_48422708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c319b0eff0791c222878393a29c32cbe337e84e3' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_mail_idc.tpl',
      1 => 1461456126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489475030571f804fed2808_48422708',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f804ff13838_56707542',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f804ff13838_56707542')) {
function content_571f804ff13838_56707542 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '489475030571f804fed2808_48422708';
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