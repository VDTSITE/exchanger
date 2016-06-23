<?php /* Smarty version 3.1.25, created on 2016-04-23 13:51:27
         compiled from "/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/delete_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:386091528571b53afab1586_45335466%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd086d79dcf1c27c116e400ac262f7af466b88ef' => 
    array (
      0 => '/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/delete_news.tpl',
      1 => 1461371575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386091528571b53afab1586_45335466',
  'variables' => 
  array (
    'news_title' => 0,
    'idn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571b53aface3c1_94640067',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b53aface3c1_94640067')) {
function content_571b53aface3c1_94640067 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '386091528571b53afab1586_45335466';
?>

<h2>Вы действительно хотите удалить статью <?php echo $_smarty_tpl->tpl_vars['news_title']->value;?>
?</h2>
<form class="basic-form"  action="delete_news.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
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