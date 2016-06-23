<?php /* Smarty version 3.1.25, created on 2016-04-29 01:34:03
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16860451657228fdbcbe995_92434821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeaf504ab7e27bbb51e974015a668da5261dd9be' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_contact.tpl',
      1 => 1461882807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16860451657228fdbcbe995_92434821',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57228fdbce72b0_71163062',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57228fdbce72b0_71163062')) {
function content_57228fdbce72b0_71163062 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16860451657228fdbcbe995_92434821';
?>
<h2>Вы действительно хотите удалить заявку от <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_contact.php" method="post">
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