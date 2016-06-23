<?php /* Smarty version 3.1.25, created on 2016-04-26 18:05:45
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_video_report.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1173419102571f83c9af34a6_11011559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce48c8fa02bc4c380c256dcd9aeb44b507f3ab0' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_video_report.tpl',
      1 => 1461683123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1173419102571f83c9af34a6_11011559',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f83c9b0cb84_83669279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f83c9b0cb84_83669279')) {
function content_571f83c9b0cb84_83669279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1173419102571f83c9af34a6_11011559';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_video_report.php" method="post">
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