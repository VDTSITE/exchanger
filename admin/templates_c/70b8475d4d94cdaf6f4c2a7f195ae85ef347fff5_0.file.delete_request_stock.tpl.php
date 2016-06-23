<?php /* Smarty version 3.1.25, created on 2016-06-09 18:51:44
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:185409924057599090934089_12520114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b8475d4d94cdaf6f4c2a7f195ae85ef347fff5' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_request_stock.tpl',
      1 => 1465487320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185409924057599090934089_12520114',
  'variables' => 
  array (
    'name' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575990909608f1_97147098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575990909608f1_97147098')) {
function content_575990909608f1_97147098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '185409924057599090934089_12520114';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_request_stock.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
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