<?php /* Smarty version 3.1.25, created on 2016-05-06 21:52:58
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/delete_rent.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1170682269572ce80af0e3b5_24876631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3a628c3bda0ef799593fc4877217c2dd500497' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/delete_rent.tpl',
      1 => 1462560691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170682269572ce80af0e3b5_24876631',
  'variables' => 
  array (
    'adress' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572ce80af26ea2_49438305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce80af26ea2_49438305')) {
function content_572ce80af26ea2_49438305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1170682269572ce80af0e3b5_24876631';
?>
<h2>Вы действительно хотите удалить адрес <?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
?</h2>
<form action="delete_rent.php" method="post">
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