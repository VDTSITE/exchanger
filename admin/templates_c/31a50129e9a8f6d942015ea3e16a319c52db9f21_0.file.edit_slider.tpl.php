<?php /* Smarty version 3.1.25, created on 2016-05-07 13:15:12
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/edit_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1401205771572dc0300fc875_33249802%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31a50129e9a8f6d942015ea3e16a319c52db9f21' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/edit_slider.tpl',
      1 => 1462616048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401205771572dc0300fc875_33249802',
  'variables' => 
  array (
    'photo' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572dc030115818_35610365',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dc030115818_35610365')) {
function content_572dc030115818_35610365 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1401205771572dc0300fc875_33249802';
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

								<form action="edit_slider.php" method="POST" class="basic-form" enctype="multipart/form-data">

									

									<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" style="width: 200px;">

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