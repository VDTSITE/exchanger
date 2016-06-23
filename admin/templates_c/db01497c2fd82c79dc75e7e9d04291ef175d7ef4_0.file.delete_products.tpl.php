<?php /* Smarty version 3.1.25, created on 2016-04-24 13:38:18
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1722919410571ca21a627294_67209044%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db01497c2fd82c79dc75e7e9d04291ef175d7ef4' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_products.tpl',
      1 => 1461494000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722919410571ca21a627294_67209044',
  'variables' => 
  array (
    'title' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571ca21a6542e5_95047933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571ca21a6542e5_95047933')) {
function content_571ca21a6542e5_95047933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1722919410571ca21a627294_67209044';
?>
<h2>Вы действительно хотите удалить товар <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
?</h2>
<form action="delete_products.php" method="POST">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idp" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
	<input type="submit" name="delete_product" value="Удалить">
</form><?php }
}
?>