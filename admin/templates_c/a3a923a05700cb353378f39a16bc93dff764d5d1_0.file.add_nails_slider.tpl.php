<?php /* Smarty version 3.1.25, created on 2016-05-07 13:42:41
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/add_nails_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:623611589572dc6a1c999c4_22492495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3a923a05700cb353378f39a16bc93dff764d5d1' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/add_nails_slider.tpl',
      1 => 1462617760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '623611589572dc6a1c999c4_22492495',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572dc6a1caea68_21705095',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dc6a1caea68_21705095')) {
function content_572dc6a1caea68_21705095 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '623611589572dc6a1c999c4_22492495';
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

								<form method="POST" action="add_nails_slider.php" name="form_slider" enctype="multipart/form-data">

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