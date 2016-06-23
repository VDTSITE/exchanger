<?php /* Smarty version 3.1.25, created on 2016-05-06 14:06:32
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/delete_request.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:653625978572c7ab86be745_76300127%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e46643d0bd3f82a88aaab5f4ae65894c828d3e2' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/delete_request.tpl',
      1 => 1462530175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653625978572c7ab86be745_76300127',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572c7ab86d6756_64609228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572c7ab86d6756_64609228')) {
function content_572c7ab86d6756_64609228 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '653625978572c7ab86be745_76300127';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_request.php" method="post">
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