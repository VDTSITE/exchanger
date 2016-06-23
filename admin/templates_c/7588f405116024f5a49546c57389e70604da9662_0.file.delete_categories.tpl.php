<?php /* Smarty version 3.1.25, created on 2016-04-26 18:26:05
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1348710836571f888d148a79_48976986%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7588f405116024f5a49546c57389e70604da9662' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_categories.tpl',
      1 => 1461460194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348710836571f888d148a79_48976986',
  'variables' => 
  array (
    'name' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f888d161867_28426667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f888d161867_28426667')) {
function content_571f888d161867_28426667 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1348710836571f888d148a79_48976986';
?>
<h2>Вы действительно хотите удалить категорию <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form action="delete_categories.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
">
	<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
	<input type="submit" name="delete_categorie" value="Удалить">
</form><?php }
}
?>