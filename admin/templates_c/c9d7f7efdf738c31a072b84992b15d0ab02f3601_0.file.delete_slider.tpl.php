<?php /* Smarty version 3.1.25, created on 2016-05-07 00:31:39
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/delete_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:535919308572d0d3b5b06b9_12825969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d7f7efdf738c31a072b84992b15d0ab02f3601' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/delete_slider.tpl',
      1 => 1462570276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535919308572d0d3b5b06b9_12825969',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572d0d3b5cdb30_00211723',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d0d3b5cdb30_00211723')) {
function content_572d0d3b5cdb30_00211723 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '535919308572d0d3b5b06b9_12825969';
?>
<h2>Вы действительно хотите удалить данный слайд?</h2>
<form class="basic-form"  action="delete_slider.php" method="post">
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