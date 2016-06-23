<?php /* Smarty version 3.1.25, created on 2016-04-26 18:51:10
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_portfolio_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:734587962571f8e6ead0af6_70701800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b349f46a0f7241d5775d15a600fe3f6844b3fb' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_portfolio_categories.tpl',
      1 => 1461685867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734587962571f8e6ead0af6_70701800',
  'variables' => 
  array (
    'name' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f8e6eaef440_29410496',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f8e6eaef440_29410496')) {
function content_571f8e6eaef440_29410496 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '734587962571f8e6ead0af6_70701800';
?>
<h2>Вы действительно хотите удалить категорию <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form action="delete_portfolio_categories.php" method="post">
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