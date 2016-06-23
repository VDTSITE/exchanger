<?php /* Smarty version 3.1.25, created on 2016-06-02 01:10:40
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:397072235574f5d609d0b99_66973306%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b26ac81f0dfdcc12d35f5874ee838535eaba42' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/delete_stock.tpl',
      1 => 1464819039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '397072235574f5d609d0b99_66973306',
  'variables' => 
  array (
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_574f5d609e7704_01148132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574f5d609e7704_01148132')) {
function content_574f5d609e7704_01148132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '397072235574f5d609d0b99_66973306';
?>
<h2>Вы действительно хотите удалить данную акцию?</h2>
<form action="delete_stock.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
">
	<input type="submit" name="delete_categorie" value="Удалить">
</form><?php }
}
?>