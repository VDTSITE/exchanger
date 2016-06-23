<?php /* Smarty version 3.1.25, created on 2016-05-07 00:17:53
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/add_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:626797899572d0a0149deb7_11423507%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1405abe364f25af3f8438bef535fd97c55da9e' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/add_slider.tpl',
      1 => 1462569471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626797899572d0a0149deb7_11423507',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572d0a014b37c7_93118144',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d0a014b37c7_93118144')) {
function content_572d0a014b37c7_93118144 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '626797899572d0a0149deb7_11423507';
?>
<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление слайда </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="add_slider.php" name="form_slider" enctype="multipart/form-data">

									<!-- Required -->
									<label for="email">Добавьте фотографию для слайда</label>
									<input type="file" name="photo_slider1" class="form-control required"  />

									<div class="spacer"></div>



									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_slider_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="submit" name="add_slide1" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->
<?php }
}
?>