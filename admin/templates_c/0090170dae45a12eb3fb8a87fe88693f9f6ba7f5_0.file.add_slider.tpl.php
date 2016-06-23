<?php /* Smarty version 3.1.25, created on 2016-06-13 19:22:12
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/add_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2118595200575eddb4de20a3_59582990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0090170dae45a12eb3fb8a87fe88693f9f6ba7f5' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/add_slider.tpl',
      1 => 1464063623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2118595200575eddb4de20a3_59582990',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575eddb4e03903_68795724',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575eddb4e03903_68795724')) {
function content_575eddb4e03903_68795724 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2118595200575eddb4de20a3_59582990';
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


									<label for="title">Введите название для слайда</label>
									<input type="text" name="title" class="form-control required"  />

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