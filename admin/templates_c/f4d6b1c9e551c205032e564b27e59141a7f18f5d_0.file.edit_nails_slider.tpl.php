<?php /* Smarty version 3.1.25, created on 2016-06-13 18:48:15
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/edit_nails_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:167426517575ed5bf3dbb06_55374793%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4d6b1c9e551c205032e564b27e59141a7f18f5d' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/edit_nails_slider.tpl',
      1 => 1464063626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167426517575ed5bf3dbb06_55374793',
  'variables' => 
  array (
    'photo' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575ed5bf3f4822_99170798',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575ed5bf3f4822_99170798')) {
function content_575ed5bf3f4822_99170798 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167426517575ed5bf3dbb06_55374793';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование слайда</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_nails_slider.php" method="POST" class="basic-form" enctype="multipart/form-data">

									

									<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" style="width: 100px;">

									<label for="new_photo">Выберите новый слайд</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку категории" /><br />

									

									
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