<?php /* Smarty version 3.1.25, created on 2016-04-26 14:45:27
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/delete_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1973874628571f54d73b2d62_39671189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd596fc97f87d6e1b2dade9abc9799c38d63a121' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/delete_news.tpl',
      1 => 1461456126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1973874628571f54d73b2d62_39671189',
  'variables' => 
  array (
    'news_title' => 0,
    'idn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f54d73df6c3_81222973',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f54d73df6c3_81222973')) {
function content_571f54d73df6c3_81222973 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1973874628571f54d73b2d62_39671189';
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