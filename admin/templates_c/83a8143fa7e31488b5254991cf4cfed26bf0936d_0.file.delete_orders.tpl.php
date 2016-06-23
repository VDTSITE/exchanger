<?php /* Smarty version 3.1.25, created on 2016-04-29 03:17:20
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9840886915722a810e0bc66_74669893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83a8143fa7e31488b5254991cf4cfed26bf0936d' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_orders.tpl',
      1 => 1461888978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9840886915722a810e0bc66_74669893',
  'variables' => 
  array (
    'name' => 0,
    'clients_id' => 0,
    'products_id' => 0,
    'count_tovarov' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5722a810e2f662_15261856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5722a810e2f662_15261856')) {
function content_5722a810e2f662_15261856 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9840886915722a810e0bc66_74669893';
?>
<h2>Вы действительно хотите удалить информацию о заказе клиента <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_orders.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="clients_id" value="<?php echo $_smarty_tpl->tpl_vars['clients_id']->value;?>
">
	<input type="hidden" name="products_id" value="<?php echo $_smarty_tpl->tpl_vars['products_id']->value;?>
">
	<input type="hidden" name="count_tovarov" value="<?php echo $_smarty_tpl->tpl_vars['count_tovarov']->value;?>
">


	<input type="submit" name="delete_orders" value="Удалить">
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