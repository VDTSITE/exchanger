<?php /* Smarty version 3.1.25, created on 2016-06-13 18:49:18
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_nails_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:692634166575ed5fe122c41_21788851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f96b2cd3471034c723a9fb2473b8e7ac701ff38' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_nails_slider.tpl',
      1 => 1464063624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692634166575ed5fe122c41_21788851',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575ed5fe14be57_93564819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575ed5fe14be57_93564819')) {
function content_575ed5fe14be57_93564819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '692634166575ed5fe122c41_21788851';
?>
<h2>Вы действительно хотите удалить данный слайд?</h2>
<form class="basic-form"  action="delete_nails_slider.php" method="post">
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