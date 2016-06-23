<?php /* Smarty version 3.1.25, created on 2016-04-25 19:50:26
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:852838099571e4ad2e99be9_30872660%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9541b78922cb88f8ab02890f5135ef04346aa15' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_categories.tpl',
      1 => 1461603020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852838099571e4ad2e99be9_30872660',
  'variables' => 
  array (
    'name' => 0,
    'photo' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571e4ad2eb4617_39165326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571e4ad2eb4617_39165326')) {
function content_571e4ad2eb4617_39165326 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '852838099571e4ad2e99be9_30872660';
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

								<form action="edit_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

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