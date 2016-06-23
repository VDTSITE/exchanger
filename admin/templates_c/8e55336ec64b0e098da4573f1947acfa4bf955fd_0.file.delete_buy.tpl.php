<?php /* Smarty version 3.1.25, created on 2016-05-06 21:17:42
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/delete_buy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2115892266572cdfc6770c01_10919642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e55336ec64b0e098da4573f1947acfa4bf955fd' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/delete_buy.tpl',
      1 => 1462558651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115892266572cdfc6770c01_10919642',
  'variables' => 
  array (
    'adress' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572cdfc6792a36_97813140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572cdfc6792a36_97813140')) {
function content_572cdfc6792a36_97813140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2115892266572cdfc6770c01_10919642';
?>
<h2>Вы действительно хотите удалить адрес <?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
?</h2>
<form action="delete_buy.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
">
	<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
">
	<input type="submit" name="delete_categorie" value="Удалить">
</form><?php }
}
?>