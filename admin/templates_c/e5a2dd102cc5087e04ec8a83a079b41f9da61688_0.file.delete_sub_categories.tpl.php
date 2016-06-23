<?php /* Smarty version 3.1.25, created on 2016-04-24 23:39:30
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_sub_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:352776798571d2f02579667_05279146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a2dd102cc5087e04ec8a83a079b41f9da61688' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_sub_categories.tpl',
      1 => 1461529700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '352776798571d2f02579667_05279146',
  'variables' => 
  array (
    'name' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571d2f025a81b1_64686119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571d2f025a81b1_64686119')) {
function content_571d2f025a81b1_64686119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '352776798571d2f02579667_05279146';
?>
<h2>Вы действительно хотите удалить подкатегорию <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form action="delete_sub_categories.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
">
	<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
	<input type="submit" name="delete_sub_categorie" value="Удалить">
</form><?php }
}
?>