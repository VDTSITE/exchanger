<?php /* Smarty version 3.1.25, created on 2016-04-26 18:42:06
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_portfolio_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1278900287571f8c4e313903_31961883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83509a10881b601eec8ffe0aeb18eb74d9ff318e' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_portfolio_categories.tpl',
      1 => 1461685310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278900287571f8c4e313903_31961883',
  'variables' => 
  array (
    'name' => 0,
    'photo' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f8c4e345775_34346367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f8c4e345775_34346367')) {
function content_571f8c4e345775_34346367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1278900287571f8c4e313903_31961883';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование категории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_portfolio_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название категории</label>
									<input type="text" name="name" placeholder="Введите название категории" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /><br />

									<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" style="width: 200px;">

									<label for="new_photo">Выберите обложку категории</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку категории" /><br />

									<label for="new_photo">Выберите наличие подкатегории</label>
									<input type="radio" name="exist" checked="checked" value="1"> Есть
									<input type="radio" name="exist" value="0"> Нет<br />
									<br />


									<input type="hidden" name="idc" value=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
>
									<input type="hidden" name="idc" value=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
>
									<input type="hidden" name="old_photo" value=<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
>
									<input type="submit" name="edit_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>