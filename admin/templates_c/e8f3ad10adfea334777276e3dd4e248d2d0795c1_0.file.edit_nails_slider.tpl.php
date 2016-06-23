<?php /* Smarty version 3.1.25, created on 2016-05-07 13:51:23
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/edit_nails_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1805393234572dc8ab318e84_89849799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f3ad10adfea334777276e3dd4e248d2d0795c1' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/edit_nails_slider.tpl',
      1 => 1462618263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805393234572dc8ab318e84_89849799',
  'variables' => 
  array (
    'photo' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572dc8ab3329f9_22201894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dc8ab3329f9_22201894')) {
function content_572dc8ab3329f9_22201894 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1805393234572dc8ab318e84_89849799';
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